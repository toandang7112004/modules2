<?php
class CustomException extends Exception
{
    public function errorMessage()
    {
        $error = '';
        $error .= '<br> Loi: ' . $this->getMessage();
        $error .= '<br> Code: ' . $this->getCode();
        $error .= '<br> Line: ' . $this->getLine();
        $error .= '<br> File: ' . $this->getFile();
        return $error;
    }
}
$email = "someone@example.com";
try {
    if (str_contains($email, "example")) {
        throw new Exception("$email is an example e-mail");
    }
} catch (Exception $e) {
    echo $e->getMessage();
} catch (CustomException $e) {
    echo $e->errorMessage();
}
