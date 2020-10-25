<?php

interface DBHelper
{
    public function openConnection();

    public function closeConnection();
}

interface UserHelper
{
    public function createUser();

    public function getListUsers();
}

interface ProductHelper
{
    public function createProduct();

    public function getListProducts();
}