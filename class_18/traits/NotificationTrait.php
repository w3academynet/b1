<?php 

trait NotificationTrait {
    public function sendNotification($message) {
        return "Notification: ".$message;
    }
}