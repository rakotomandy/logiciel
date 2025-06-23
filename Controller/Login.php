<?php

class Login
{

    public function index()
    {

        Load::template("header", [
            "title" => "login",
            "css" => [
                "all",
                "login"
            ]
        ]);
        Load::view("login");
        Load::template("footer",[
            "js"=>["jquery.min","all","login"]
        ]);
    }
}
