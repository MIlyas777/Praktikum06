<?php

require_once './data.php';

if (getUser()) {
  logout();
}

header('Location: ./main.php');