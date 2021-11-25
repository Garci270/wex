<?php
class productsModel{
    private $db;
    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=tpespecial','root','');
    }
    function getProducts($id){
        if($id>0){
            $query = $this->db->prepare('SELECT a.*, c.Descripcion as categoria FROM articulo a, categoria c WHERE a.idcategoria = c.idcategoria AND a.idarticulo =?');
        }
        else{
            $query = $this->db->prepare('SELECT a.*, c.Descripcion as categoria FROM articulo a, categoria c WHERE a.idcategoria = c.idcategoria ORDER BY a.Descripcion');
        }
        $query->execute(array($id));
        $products = $query->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }
    function getProductsSlider(){
        $query = $this->db->prepare('SELECT a.*, c.Descripcion as categoria FROM articulo a, categoria c WHERE a.idcategoria = c.idcategoria ORDER BY a.Descripcion AND idarticulo <= 24');
        $query->execute();
        $products = $query->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }
    function getProductDetail($id){
        $query = $this->db->prepare('SELECT a.*, c.Descripcion as categoria FROM articulo a, categoria c WHERE a.idcategoria = c.idcategoria  AND idarticulo =?');
        $query->execute(array($id));
        $product = $query->fetchAll(PDO::FETCH_OBJ);
        return $product;
    }
    
    function deleteProduct($id){
        $query = $this->db->prepare("DELETE  FROM articulo WHERE idarticulo=?");
        $query->execute(array($id));
    }

    function deleteAllProductsCat($id){
        $query = $this->db->prepare("DELETE  FROM articulo WHERE idcategoria=?");
        $query->execute(array($id));
    }

    function updateProduct($description,$price,$brand,$categoria,$id, $image){
        $filepath = $this->addImage($image);
        $query = $this->db->prepare("UPDATE articulo SET Descripcion=?, Precio_1=?, url_imagen=?, Marca=?, idcategoria=? WHERE idarticulo =?");
        $query->execute(array($description,$price,$filepath,$brand,$categoria,$id));
    }

    function updateProductNoImage($description,$price,$brand,$categoria,$id){
        $query = $this->db->prepare("UPDATE articulo SET Descripcion=?, Precio_1=?, Marca=?, idcategoria=? WHERE idarticulo =?");
        $query->execute(array($description,$price,$brand,$categoria,$id));
    }

    function addProduct($description,$price,$brand,$category,$image){
        $filepath = $this->addImage($image);
        $query = $this->db->prepare("INSERT INTO articulo (Descripcion, Precio_1, url_imagen, Marca, idcategoria) VALUES(?,?,?,?,?)");
        $query->execute(array($description,$price,$filepath,$brand,$category));
    }

    function addImage($image){
        $filepath = "assets/img/product/{$image['name']}";
        if (move_uploaded_file($image['tmp_name'], $filepath)) {
            return $filepath;            
        }
        return null;
    }

    function getComentByProduct($id){
        $query = $this->db->prepare('SELECT c.*, u.nombre_usuario as nombreU FROM articulo a, comentario c, usuario u WHERE a.idarticulo = c.idarticulo AND c.idusuario = u.idusuario  AND c.idarticulo =?');
        $query->execute(array($id));
        $coments = $query->fetchAll(PDO::FETCH_OBJ);
        return $coments;
    }

    function getComentByRate($id, $rate){
        $query = $this->db->prepare('SELECT * FROM comentario WHERE puntuacion=? AND idarticulo=?');
        $query->execute(array($rate,$id));
        $coments = $query->fetchAll(PDO::FETCH_OBJ);
        return $coments;
    }

    function getComents(){
        $query = $this->db->prepare('SELECT c.*, u.nombre_usuario as nombreU FROM comentario c, usuario u WHERE u.idusuario = c.idusuario');
        $query->execute();
        $coments = $query->fetchAll(PDO::FETCH_OBJ);
        return $coments;
    }

    function setComentByProduct($idproduct,$iduser,$coment,$rate,$date){
        $query = $this->db->prepare("INSERT INTO comentario(idarticulo, idusuario, comentario,puntuacion, fecha) VALUES (?,?,?,?,?)");
        $query->execute(array($idproduct,$iduser,$coment,$rate,$date));

    }

    function deleteComent($id){
        $query = $this->db->prepare("DELETE FROM comentario WHERE idcomentario =?");
        $delete = $query->execute(array($id));
        return $delete;
    }
}