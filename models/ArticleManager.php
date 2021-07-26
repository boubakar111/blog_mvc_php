<?php

class ArticleManager extends Model
{

    public function getArticles(){
       $tb =  $this->getAll('tblcategory', 'Article');

       return $tb;
    }

    public function getArticle($id){
      $tb =  $this->getOnePost('tblposts' , 'Post' , $id);
        return   $tb ;
    }
}