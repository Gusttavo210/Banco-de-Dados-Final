<?php
    require_once("php/conexao.php");
# Create
function cadastrarHome($imagem, $titulo, $subheading) 
{
    $link = getConnection();

    $sql = "insert into Home (imagem, titulo, subheading) values ('{$imagem}', '{$titulo}', '{$subheading}')";
    
    $result = mysqli_query($link, $sql);

    mysqli_close($link);

    if($result)
        return true; # retorno quando ocorrer sucesso na inserção

    return false; # retorno padrão(default)
}

function cadastrarpost( $postitle, $postsubtitle, $data) 
{
    $link = getConnection();

    $sql = "insert into post(  posttilte , subtititle, data) values ( '{$postitle}', '{$postsubtitle}', '{$data}')";
    
    $result = mysqli_query($link, $sql);

    mysqli_close($link);

    if($result)
        return true;

    return false;
}

function cadastrarSobre( $descricao) 
{
    $link = getConnection();

    $sql = "insert into about( descricao) values ( '{$descricao}')";
    
    $result = mysqli_query($link, $sql);

    mysqli_close($link);

    if($result)
        return true;

    return false;
}


    # Retrieve
    function listaHome()
    {
        $link = getConnection();
        $sql = "select * from Home";

        $result = mysqli_query($link, $sql); # 0-N

        $listaHome = array();
        while($Home = mysqli_fetch_object($result))
        {
            array_push($listaHome, $Home);
        }

        mysqli_close($link);
        return $listaHome;
    }

    function listapost()
    {
        $link = getConnection();
        $sql = "select * from post";

        $result = mysqli_query($link, $sql);

        $listapost = array();
        while($post = mysqli_fetch_object($result))
        {
            array_push($listapost, $post);
        }

        mysqli_close($link);
        return $listapost;
    }

    function listaAbout()
    {
        $link = getConnection();
        $sql = "select * from about";

        $result = mysqli_query($link, $sql);

        $listaAbout = array();
        while($about = mysqli_fetch_object($result))
        {
            array_push($listaAbout, $about);
        }

        mysqli_close($link);
        return $listaAbout;
    }

    # /Update
    function atualizarHome($id, $imagem, $titulo, $descricao)
    {
        $link = getConnection();

        $sql = "update Home set imagem = '{$imagem}', titulo = '{$titulo}', descricao = '{$subheading}' where id = {$id}";
        
        $result = mysqli_query($link, $sql);

        mysqli_close($link);

        if($result)
            return true;

        return false;
    }
    function atualizarPost($id, $postitle, $postsubtitle, $data)
    {
        $link = getConnection();

        $sql = "update Sample Post set  titulo = '{$postitle}', subtitulo = '{$postsubtitle}', data = '{$data}' where id = {$id}";

        $result = mysqli_query($link, $sql);

        mysqli_close($link);

        if($result)
            return true;

        return false;
    }
    function atualizarSobre($id, $descricao)
    {
        $link = getConnection();

        $sql = "update about set  descricao = '{$descricao}' where id = {$id}";
        
        $result = mysqli_query($link, $sql);

        mysqli_close($link);

        if($result)
            return true;

        return false;
    }
    
    # /Update
    
    # /Delete
    function apagarHome($id) 
    {
        $link = getConnection();

        $sql = "delete from Home where id = {$id}";
        
        $result = mysqli_query($link, $sql);

        mysqli_close($link);

        if($result)
            return true;

        return false;
    }

    function apagarPost($id) 
    {
        $link = getConnection();

        $sql = "delete from Sample Post where id = {$id}";
        
        $result = mysqli_query($link, $sql);

        mysqli_close($link);

        if($result)
            return true;

        return false;
    }

    function apagarSobre($id) 
    {
        $link = getConnection();

        $sql = "delete from about where id = {$id}";
        
        $result = mysqli_query($link, $sql);

        mysqli_close($link);

        if($result)
            return true;

        return false;
    }
    # /Delete

    function localizaHmoePeloID($id)
    {
        $link = getConnection();

        $sql = "select * from Home where id = {$id}";

        $servico = mysqli_fetch_object(mysqli_query($link, $sql));

        mysqli_close($link);

        return $Home;
    }

    function localizaPostPeloID($id)
    {
        $link = getConnection();

        $sql = "select * from sample post where id = {$id}";

        $portfolio = mysqli_fetch_object(mysqli_query($link, $sql));

        mysqli_close($link);

        return $post;
    }

    function localizaSobrePeloID($id)
    {
        $link = getConnection();

        $sql = "select * from about where id = {$id}";

        $about = mysqli_fetch_object(mysqli_query($link, $sql));

        mysqli_close($link);

        return $about;
    }