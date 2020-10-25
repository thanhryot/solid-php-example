<?php

interface DBHelper
{
    public function openConnection();

    public function createUser();

    public function getListUsers();

    public function createProduct();

    public function getListProducts();

    public function closeConnection();
}