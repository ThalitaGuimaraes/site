<?php
  require_once("site.crud.php");
  $id=$_POST['inputId']; 
  $imagem=$_POST['inputImagem'];
  $titulo=$_POST['inputTitulo'];
  $descricao=$_POST['inputDescricao'];
  if(AtualizarPortfolios($id,$imagem, $titulo, $descricao))
    {
        header('Location: ../index.php');
        exit;
    }
    header('Location: portfolio.form.php?error=true');
    exit;