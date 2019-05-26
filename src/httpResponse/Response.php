<?php

namespace tommarti\httpResponse;

use Symfony\Component\Yaml\Yaml;

class Response
{
    private const ACCEPTED_FORMAT = array(
        "yaml" => "yaml",
        "json" => "json"
    );

    public function make ($success, $statusCode, $payload, $format,$customMessage = false) {
        try {
            if ($success === true OR $success === false) {
                if (isset($statusCode['code'])) {
                    if (gettype($payload) == "array") {
                        $response = $this->constructData($success, $statusCode, $payload, $customMessage);
                        http_response_code($statusCode['code']);
                        switch ($format) {
                            case self::ACCEPTED_FORMAT['yaml']:
                                $this->printYaml($response);
                                break;
                            case self::ACCEPTED_FORMAT['json']:
                                $this->printJson($response);
                                break;
                            default:
                                throw new HttpResponseException('Format not existe');
                        }
                        return;
                    }
                    throw new HttpResponseException('Payload not an array');
                }
                throw new HttpResponseException('Status code not an HttpCode');
            }
            throw new HttpResponseException('Success not a boolean');
        } catch (HttpResponseException $e) {
            echo "HttpResponse error : $e";
        }
    }

    private function constructData ($success, $statusCode, $payload, $customMessage) {
        $response = array(
            "success" => $success,
            "payload" => $payload
        );
        if (!$success) {
            $response["error"] = array(
                "code" => $statusCode['code']
            );
            if ($customMessage != false) {
                $response["error"]["message"] = $customMessage;
            } else {
                $response["error"]["message"] = $statusCode['message'];
            }
        }
        return $response;
    }

    private function printYaml(array $response)
    {
        echo Yaml::dump($response, 2);
    }

    private function printJson(array $response)
    {
        echo json_encode($response);
    }
}
