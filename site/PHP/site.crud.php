<?php
   require_once("conexao.php");

   function listaPortfolios()
   {
       $link=getConnection();
       $sql="SELECT * FROM portfolios";
       $result=mysqli_query($link,$sql);
       $listaPortfolios=array();
       while($portfolio=mysqli_fetch_object($result))
       {
           array_push($listaPortfolios,$portfolio);
       }
       mysqli_close($link);
       return $listaPortfolios;
   }
   function CadastrarPortfolios($imagem,$titulo,$descricao)
   {
       $link=getConnection();
       $sql="INSERT INTO portfolios (imagem,titulo,descricao) VALUES ('{$imagem}','{$titulo}','{$descricao}')";
       $result=mysqli_query($link,$sql);
       
      if($result)
      return true;

      return false;
   }
   function AtualizarPortfolios($id,$imagem,$titulo,$descricao)
   {
       $link=getConnection();
       $sql="UPDATE portfolios SET imagem='{$imagem}',titulo='{$titulo}', descricao='{$descricao}' where id={$id}";
       $result=mysqli_query($link,$sql);
       
      if($result)
      return true;

      return false;
   }
   function DeletarPortfolios($id)
   {
       $link=getConnection();
       $sql="DELETE FROM portfolios where id={$id}";
       $result=mysqli_query($link,$sql);
       
      if($result)
      return true;

      return false;
   }
   function LocalizarPortfolios($id)
   {
       $link=getConnection();
       $sql="SELECT * FROM portfolios where id={$id}";
       $result=mysqli_query($link,$sql);
       
      $portfolio=mysqli_fetch_object(mysqli_query($link,$sql));
      mysqli_close($link);
      return $portfolio;
   }
