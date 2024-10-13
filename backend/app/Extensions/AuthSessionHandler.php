<?php

    namespace App\Extensions;

    class AuthSessionHandler implements SessionHandlerInterface
    {
        public function destroy($sessionId) {
            echo "<script>console.log('Debug Objects: " . $sessionId . "' );</script>";
        }
    }

    $handler = new MongoSessionHandler();
    session_set_save_handler($handler, true);
    session_start();
?>