-- create database
CREATE DATABASE IF NOT EXISTS TP_WAD;

-- select database
USE TP_WAD;

-- create showroom table
CREATE TABLE IF NOT EXISTS showroom_daffa_table (
	id_mobil int(255) NOT NULL PRIMARY KEY,
    nama_mobil varchar(255) NOT NULL,
    pemilik_mobil varchar(255) NOT NULL,
    merk_mobil varchar(255) NOT NULL,
    tanggal_beli date NOT NULL,
    deskripsi text NOT NULL,
    foto_mobil varchar(255) NOT NULL,
    status_pembayaran varchar(255) NOT NULL
);

-- create users table 
CREATE TABLE IF NOT EXISTS users (
    id bigint(20) NOT NULL,
    nama varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    no_hp varchar(50) NOT NULL,
    PRIMARY KEY (id,email)
);