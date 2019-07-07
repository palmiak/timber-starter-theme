<?php

namespace lib;

class Controller {
    function __construct() {}

    private function generateUrl($route_name, $options = []) {}

    private function render($twig_file_name, $options = []) {
		return Timber::compile($twig_file_name, $options);
    }

    private function redirectToRoute($route_name, $options = []) {}

    private function redirect($url) {}

    private function getUser() {}
}