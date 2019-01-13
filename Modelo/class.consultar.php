<?php
class Consultar{

//bloque de usuarios
    public function insertarUsuario($arg_user, $arg_passadmin, $arg_pass){
     $modelo= new Conexion();
     $conexion=$modelo->get_conexion();
     $sql= "insert into login (user, passadmin, pass) values (:user, :passadmin, :pass)";
     $statement=$conexion->prepare($sql);
     $statement->bindParam(':user', $arg_user);
     $statement->bindParam(':passadmin', $arg_passadmin);
     $statement->bindParam(':pass', $arg_pass);
    
     if (!$statement) {
      return "error al crear registro";

     }
     else

      {
         $statement->execute();

      return "registro creado correctamente";
       }
  }

    public function cargarUsuarios(){
    $rows=null;
    $modelo = new Conexion();
    $conexion=$modelo->get_conexion();
    $sql="select * from login";
    $statement=$conexion->prepare($sql);
    $statement->execute();
    while ($result=$statement->fetch()) {
      
      $rows[]=$result;
    }

    return $rows;
  }

    public function eliminarUsuario($arg_id){

          $modelo = new Conexion();
          $conexion=$modelo->get_conexion();
          $sql="delete from login where id = :id";
          $statement=$conexion->prepare($sql);
          $statement->bindParam(':id', $arg_id);
   if(!$statement) {
      return "error al eliminar usuario";
     } else {

             $statement->execute();
            return "usuario eliminado correctamente" ;     
         }

 }

 public function cargarUsuario($arg_id){
  $rows=null;
    $modelo = new Conexion();
    $conexion=$modelo->get_conexion();
    $sql="select * from login where id = :id";
    $statement=$conexion->prepare($sql);
    $statement->bindParam(":id", $arg_id);
    $statement->execute();
    while ($result=$statement->fetch()) {
      
      $rows[]=$result;
    }

    return $rows;

}

public function modificarUsuario($arg_campo, $arg_valor, $arg_id){
 $modelo = new Conexion();
    $conexion=$modelo->get_conexion();
    $sql="update login set $arg_campo = :valor where id = :id";
    $statement=$conexion->prepare($sql);
    $statement->bindParam(":valor", $arg_valor);
    $statement->bindParam(":id", $arg_id);
    if (!$statement) {

        return "error al modificar registro ";

      }else{

        $statement->execute();
        return "registro modificado correctamente";
    }

   
}

 //bloque de viviendas
	public function insertarVivienda($arg_nombre, $arg_apellido, $arg_sexo, $arg_edad, $arg_sector, $arg_direccion, $arg_familias){
     $modelo= new Conexion();
     $conexion=$modelo->get_conexion();
     $sql= "insert into ubicacion_geografica (numero_casa, estado, municipio, parroquia, sector, direccion, numero_familias) values (:nombre, :apellido, :sexo, :edad, :sector, :direccion, :familias)";
     $statement=$conexion->prepare($sql);
     $statement->bindParam(':nombre', $arg_nombre);
     $statement->bindParam(':apellido', $arg_apellido);
     $statement->bindParam(':sexo', $arg_sexo);
     $statement->bindParam(':edad', $arg_edad);
     $statement->bindParam(':sector', $arg_sector);
     $statement->bindParam(':direccion', $arg_direccion);
     $statement->bindParam(':familias', $arg_familias);
     if (!$statement) {
     	return "error al crear registro";

     }
     else

      {
         $statement->execute();

     	return "registro creado correctamente";
       }
	}

  

  public function cargarViviendas(){
  	$rows=null;
  	$modelo = new Conexion();
  	$conexion=$modelo->get_conexion();
  	$sql="select * from ubicacion_geografica where numero_casa = numero_casa";
  	$statement=$conexion->prepare($sql);
  	$statement->execute();
  	while ($result=$statement->fetch()) {
  		
  		$rows[]=$result;
  	}

  	return $rows;
  }

   public function eliminarVivienda($arg_casa){

          $modelo = new Conexion();
          $conexion=$modelo->get_conexion();
          $sql="delete from ubicacion_geografica where numero_casa = :casa";
          $statement=$conexion->prepare($sql);
          $statement->bindParam(':casa', $arg_casa);
   if(!$statement) {
      return "error al eliminar registro";
     } else {

             $statement->execute();
            return "registro eliminado correctamente" ;     
         }

 }

public function buscarVivienda1($arg_casa){

  $rows=null;
    $modelo = new Conexion();
    $conexion=$modelo->get_conexion();
    $casa="%".$arg_casa."%";
    $sql="select * from ubicacion_geografica where numero_casa like :casa";
    $statement=$conexion->prepare($sql);
    $statement->bindParam(":casa",$casa);
    $statement->execute();
    while ($result=$statement->fetch()) {
      
      $rows[]=$result;
    }

    return $rows;
}

public function buscarVivienda($arg_casa){

  $rows=null;
    $modelo = new Conexion();
    $conexion=$modelo->get_conexion();
    $casa="%".$arg_casa."%";
    $sql="select * from ubicacion_geografica join jefes_familia join grupo_familiar where ubicacion_geografica.numero_casa = jefes_familia.numero_casaj and jefes_familia.cedula = grupo_familiar.cedulaj and numero_casa like :casa";
    $statement=$conexion->prepare($sql);
    $statement->bindParam(":casa",$casa);
    $statement->execute();
    while ($result=$statement->fetch()) {
      
      $rows[]=$result;
    }

    return $rows;
}

public function cargarVivienda($arg_casa){
  $rows=null;
    $modelo = new Conexion();
    $conexion=$modelo->get_conexion();
    $sql="select * from ubicacion_geografica where numero_casa = :casa";
    $statement=$conexion->prepare($sql);
    $statement->bindParam(":casa", $arg_casa);
    $statement->execute();
    while ($result=$statement->fetch()) {
      
      $rows[]=$result;
    }

    return $rows;

}

public function modificarVivienda($arg_campo, $arg_valor, $arg_casa){
 $modelo = new Conexion();
    $conexion=$modelo->get_conexion();
    $sql="update ubicacion_geografica set $arg_campo = :valor where numero_casa = :casa";
    $statement=$conexion->prepare($sql);
    $statement->bindParam(":valor", $arg_valor);
    $statement->bindParam(":casa", $arg_casa);
    if (!$statement) {

        return "error al modificar registro ";

      }else{

        $statement->execute();
        return "registro modificado correctamente";
    }

   
}

//bloque de jefes de familias

   

   public function cargarJefes(){
    $rows=null;
    $modelo = new Conexion();
    $conexion=$modelo->get_conexion();
    $sql="select * from jefes_familia";
    $statement=$conexion->prepare($sql);
    $statement->execute();
    while ($result=$statement->fetch()) {
      
      $rows[]=$result;
    }

    return $rows;
  }

public function cargarJefe($arg_casa){
  $rows=null;
    $modelo = new Conexion();
    $conexion=$modelo->get_conexion();
    $sql="select * from jefes_familia where cedula = :casa";
    $statement=$conexion->prepare($sql);
    $statement->bindParam(":casa", $arg_casa);
    $statement->execute();
    while ($result=$statement->fetch()) {
      
      $rows[]=$result;
    }

    return $rows;

}
  public function buscarJefe($arg_casa){

  $rows=null;
    $modelo = new Conexion();
    $conexion=$modelo->get_conexion();
    $casa="%".$arg_casa."%";
    $sql="select * from jefes_familia where cedula like :casa";
    $statement=$conexion->prepare($sql);
    $statement->bindParam(":casa",$casa);
    $statement->execute();
    while ($result=$statement->fetch()) {
      
      $rows[]=$result;
    }

    return $rows;
}

 public function eliminarJefe($arg_cedula){

          $modelo = new Conexion();
          $conexion=$modelo->get_conexion();
          $sql="delete from jefes_familia where cedula = :cedula";
          $statement=$conexion->prepare($sql);
          $statement->bindParam(':cedula', $arg_cedula);
   if(!$statement) {
      return "Error al eliminar Registro";
     } else {

             $statement->execute();
            return "
            Registro eliminado correctamente" ;     
         }

 }


public function modificarJefe($arg_campo, $arg_valor, $arg_cedula){
 $modelo = new Conexion();
    $conexion=$modelo->get_conexion();
    $sql="update jefes_familia set $arg_campo = :valor where cedula = :cedula";
    $statement=$conexion->prepare($sql);
    $statement->bindParam(":valor", $arg_valor);
    $statement->bindParam(":cedula", $arg_cedula);
    if (!$statement) {

        return "error al modificar jefe ";

      }else{

        $statement->execute();
        return "jefe modificado correctamente";
    }

   
}

public function insertarJefe($arg_cedula, $arg_nacionalidad, $arg_nombres, $arg_apellidos, $arg_sexo, $arg_fecha_nacimiento, $arg_telefono, $arg_edad, $arg_estado_civil, $arg_vive_casa, $arg_profesion_oficio, $arg_trabaja, $arg_lugar_trabajo, $arg_ingreso_mensual, $arg_grado_instruccion, $arg_estudia, $arg_institucion, $arg_vota_donde,  $arg_enfermedad, $arg_medicamento, $arg_discapacitado, $arg_asistido, $arg_embarazada, $arg_correo, $arg_control, $arg_serial, $arg_codigo, $arg_numero_casaj){
     $modelo= new Conexion();
     $conexion=$modelo->get_conexion();
     $sql= "insert into jefes_familia (cedula, nacionalidad, nombres, apellidos, sexo, fecha_nacimiento, telefono, edad, estado_civil, vive_casa, profesion_oficio, trabaja, lugar_trabajo, ingreso_mensual, grado_instruccion, estudia, institucion, vota_donde, enfermedad, medicamento, discapacitado, asistido, embarazada, correo, control, serial_carnet, codigo_carnet, numero_casaj) values (:cedula, :nacionalidad, :nombres,  :apellidos, :sexo, :fecha_nacimiento, :telefono, :edad, :estado_civil, :vive_casa, :profesion_oficio, :trabaja, :lugar_trabajo, :ingreso_mensual, :grado_instruccion, :estudia, :institucion, :vota_donde, :enfermedad, :medicamento, :discapacitado, :asistido, :embarazada, :correo, :control, :serial, :codigo, :numero_casaj)";
     $statement=$conexion->prepare($sql);
    
     $statement->bindParam(':cedula', $arg_cedula);
     $statement->bindParam(':nacionalidad', $arg_nacionalidad);
     $statement->bindParam(':nombres', $arg_nombres);
     $statement->bindParam(':apellidos', $arg_apellidos);
     $statement->bindParam(':sexo', $arg_sexo);
     $statement->bindParam(':fecha_nacimiento', $arg_fecha_nacimiento);
     $statement->bindParam(':telefono', $arg_telefono);
     $statement->bindParam(':edad', $arg_edad);
     $statement->bindParam(':estado_civil', $arg_estado_civil);
     $statement->bindParam(':vive_casa', $arg_vive_casa);
     $statement->bindParam(':profesion_oficio', $arg_profesion_oficio);
     $statement->bindParam(':trabaja', $arg_trabaja);
     $statement->bindParam(':lugar_trabajo', $arg_lugar_trabajo);
     $statement->bindParam(':ingreso_mensual', $arg_ingreso_mensual);
     $statement->bindParam(':grado_instruccion', $arg_grado_instruccion);
     $statement->bindParam(':estudia', $arg_estudia);
     $statement->bindParam(':institucion', $arg_institucion);
     $statement->bindParam(':vota_donde', $arg_vota_donde);
     $statement->bindParam(':enfermedad', $arg_enfermedad);
     $statement->bindParam(':medicamento', $arg_medicamento);
     $statement->bindParam(':discapacitado', $arg_discapacitado);
     $statement->bindParam(':asistido', $arg_asistido);
     $statement->bindParam(':embarazada', $arg_embarazada);
     $statement->bindParam(':correo', $arg_correo);
     $statement->bindParam(':control', $arg_control);
     $statement->bindParam(':serial', $arg_serial);
     $statement->bindParam(':codigo', $arg_codigo);
     $statement->bindParam(':numero_casaj', $arg_numero_casaj);
     

     if (!$statement) {
      return "error al crear registro";

     }
     else

      {
         $statement->execute();

      return "registro creado correctamente";
       }
  }

public function insertarJefe2($arg_cedula, $arg_nacionalidad, $arg_nombres, $arg_apellidos, $arg_sexo, $arg_fecha_nacimiento, $arg_telefono, $arg_edad, $arg_estado_civil, $arg_vive_casa, $arg_profesion_oficio, $arg_trabaja, $arg_lugar_trabajo, $arg_ingreso_mensual, $arg_grado_instruccion, $arg_estudia, $arg_institucion, $arg_vota_donde,  $arg_enfermedad, $arg_medicamento, $arg_discapacitado, $arg_asistido, $arg_embarazada, $arg_correo, $arg_control, $arg_serial, $arg_codigo, $arg_numero_casaj){
     $modelo= new Conexion();
     $conexion=$modelo->get_conexion();
     $sql= "insert into jefes_familia (cedula, nacionalidad, nombres, apellidos, sexo, fecha_nacimiento, telefono, edad, estado_civil, vive_casa, profesion_oficio, trabaja, lugar_trabajo, ingreso_mensual, grado_instruccion, estudia, institucion, vota_donde, enfermedad, medicamento, discapacitado, asistido, embarazada, correo, control, serial_carnet, codigo_carnet, numero_casaj) values (:cedula, :nacionalidad, :nombres,  :apellidos, :sexo, :fecha_nacimiento, :telefono, :edad, :estado_civil, :vive_casa, :profesion_oficio, :trabaja, :lugar_trabajo, :ingreso_mensual, :grado_instruccion, :estudia, :institucion, :vota_donde, :enfermedad, :medicamento, :discapacitado, :asistido, :embarazada, :correo, :control, :serial, :codigo, :numero_casaj)";
     $statement=$conexion->prepare($sql);
    
     $statement->bindParam(':cedula', $arg_cedula);
     $statement->bindParam(':nacionalidad', $arg_nacionalidad);
     $statement->bindParam(':nombres', $arg_nombres);
     $statement->bindParam(':apellidos', $arg_apellidos);
     $statement->bindParam(':sexo', $arg_sexo);
     $statement->bindParam(':fecha_nacimiento', $arg_fecha_nacimiento);
     $statement->bindParam(':telefono', $arg_telefono);
     $statement->bindParam(':edad', $arg_edad);
     $statement->bindParam(':estado_civil', $arg_estado_civil);
     $statement->bindParam(':vive_casa', $arg_vive_casa);
     $statement->bindParam(':profesion_oficio', $arg_profesion_oficio);
     $statement->bindParam(':trabaja', $arg_trabaja);
     $statement->bindParam(':lugar_trabajo', $arg_lugar_trabajo);
     $statement->bindParam(':ingreso_mensual', $arg_ingreso_mensual);
     $statement->bindParam(':grado_instruccion', $arg_grado_instruccion);
     $statement->bindParam(':estudia', $arg_estudia);
     $statement->bindParam(':institucion', $arg_institucion);
     $statement->bindParam(':vota_donde', $arg_vota_donde);
     $statement->bindParam(':enfermedad', $arg_enfermedad);
     $statement->bindParam(':medicamento', $arg_medicamento);
     $statement->bindParam(':discapacitado', $arg_discapacitado);
     $statement->bindParam(':asistido', $arg_asistido);
     $statement->bindParam(':embarazada', $arg_embarazada);
     $statement->bindParam(':correo', $arg_correo);
     $statement->bindParam(':control', $arg_control);
     $statement->bindParam(':serial', $arg_serial);
     $statement->bindParam(':codigo', $arg_codigo);
     $statement->bindParam(':numero_casaj', $arg_numero_casaj);
     

     if (!$statement) {
      return "error al crear registro";

     }
     else

      {
         $statement->execute();

      return "llega hasta aqui";
       }
  }


 
 //bloque de grupo familiar

 public function insertarGrupo($arg_cedula, $arg_nacionalidad, $arg_nombres, $arg_apellidos, $arg_fecha_nacimiento, $arg_sexo, $arg_edad, $arg_telefono, $arg_correo, $arg_serial, $arg_codigo, $arg_estado_civil, $arg_parentesco, $arg_estudia, $arg_grado_instruccion, $arg_trabaja, $arg_profesion, $arg_lugar, $arg_enfermedad, $arg_discapacidad, $arg_vota, $arg_cedulaj, $arg_ingreso_mensual, $arg_institucion, $arg_medicamento, $arg_asistido, $arg_embarazada, $arg_control, $arg_vive, $arg_numero_casa){
     $modelo= new Conexion();
     $conexion=$modelo->get_conexion();
     $sql= "insert into grupo_familiar (cedula_miembro, nacionalidad_miembro, nombres_miembro, apellidos_miembro, fecha_nacimiento_miembro, sexo_miembro, edad_miembro, telefono_miembro, correo_miembro, serial_miembro, codigo_miembro, estado_civil_miembro, parentesco_miembro, estudia_miembro, grado_instruccion_miembro, trabaja_miembro, profesion_oficio_miembro, lugar_trabajo_miembro, enfermedad_miembro, discapacidad_miembro, vota_donde_miembro, cedulaj, ingreso_mensual_m, institucion_m, medicamento_m, asistido_m, embarazada_m, control_m, vive_casa_m, numero_casa_m) values (:cedula, :nacionalidad, :nombres, :apellidos, :fecha_nacimiento, :sexo, :edad, :telefono, :correo, :serial, :codigo, :estado_civil, :parentesco, :estudia, :grado_instruccion, :trabaja, :profesion, :lugar, :enfermedad, :discapacidad, :vota, :cedulaj, :ingreso_mensual, :institucion, :medicamento, :asistido, :embarazada, :control, :vive, :numero_casa)";
     $statement=$conexion->prepare($sql);
     $statement->bindParam(':cedula', $arg_cedula);
     $statement->bindParam(':nacionalidad', $arg_nacionalidad);
     $statement->bindParam(':nombres', $arg_nombres);
     $statement->bindParam(':apellidos', $arg_apellidos);
     $statement->bindParam(':fecha_nacimiento', $arg_fecha_nacimiento);
     $statement->bindParam(':sexo', $arg_sexo);
     $statement->bindParam(':edad', $arg_edad);
     $statement->bindParam(':telefono', $arg_telefono);
     $statement->bindParam(':correo', $arg_correo); 
     $statement->bindParam(':serial', $arg_serial);
     $statement->bindParam(':codigo', $arg_codigo);
     $statement->bindParam(':estado_civil', $arg_estado_civil);
     $statement->bindParam(':parentesco', $arg_parentesco);
     $statement->bindParam(':estudia', $arg_estudia);
     $statement->bindParam(':grado_instruccion', $arg_grado_instruccion);
     $statement->bindParam(':trabaja', $arg_trabaja);
     $statement->bindParam(':profesion', $arg_profesion);
     $statement->bindParam(':lugar', $arg_lugar);
     $statement->bindParam(':enfermedad', $arg_enfermedad);
     $statement->bindParam(':discapacidad', $arg_discapacidad);
     $statement->bindParam(':vota', $arg_vota);
     $statement->bindParam(':cedulaj', $arg_cedulaj);
     $statement->bindParam(':ingreso_mensual', $arg_ingreso_mensual);
     $statement->bindParam(':institucion', $arg_institucion);
     $statement->bindParam(':medicamento', $arg_medicamento);
     $statement->bindParam(':asistido', $arg_asistido);
     $statement->bindParam(':embarazada', $arg_embarazada);
     $statement->bindParam(':control', $arg_control);
     $statement->bindParam(':vive', $arg_vive);
     $statement->bindParam(':numero_casa', $arg_numero_casa);

    
    

     if (!$statement) {
      return "error al crear registro";

     }
     else

      {
         $statement->execute();

      return "registro creado correctamente";
       }
  }

    public function eliminarGrupo($arg_grupo){

          $modelo = new Conexion();
          $conexion=$modelo->get_conexion();
          $sql="delete from grupo_familiar where cedula_miembro = :grupo";
          $statement=$conexion->prepare($sql);
          $statement->bindParam(':grupo', $arg_grupo);
   if(!$statement) {
      return "error al eliminar registro";
     } else {

             $statement->execute();
            return "registro eliminado correctamente" ;     
         }

 }

   public function cargarGrupos(){
    $rows=null;
    $modelo = new Conexion();
    $conexion=$modelo->get_conexion();
    $sql="select * from grupo_familiar";
    $statement=$conexion->prepare($sql);
    $statement->execute();
    while ($result=$statement->fetch()) {
      
      $rows[]=$result;
    }

    return $rows;
  }
     public function cargarGrupo($casa){
    $rows=null;
    $modelo = new Conexion();
    $conexion=$modelo->get_conexion();
    $sql="select * from grupo_familiar where cedula_miembro = $casa ";
    $statement=$conexion->prepare($sql);
    $statement->execute();
    while ($result=$statement->fetch()) {
      
      $rows[]=$result;
    }

    return $rows;

  }

      public function buscarGrupo($arg_casa){

  $rows=null;
    $modelo = new Conexion();
    $conexion=$modelo->get_conexion();
    $casa="%".$arg_casa."%";
    $sql="select * from grupo_familiar where cedula_miembro like :casa";
    $statement=$conexion->prepare($sql);
    $statement->bindParam(":casa",$casa);
    $statement->execute();
    while ($result=$statement->fetch()) {
      
      $rows[]=$result;
    }

    return $rows;

  }


  public function modificarGrupo($arg_campo, $arg_valor, $arg_cedula){
 $modelo = new Conexion();
    $conexion=$modelo->get_conexion();
    $sql="update grupo_familiar set $arg_campo = :valor where cedula_miembro = :cedula";
    $statement=$conexion->prepare($sql);
    $statement->bindParam(":valor", $arg_valor);
    $statement->bindParam(":cedula", $arg_cedula);
    if (!$statement) {

        return "error al modificar registro ";

      }else{

        $statement->execute();
        return "registro modificado correctamente";
    }

   
}

public function buscarGrupo3($arg_casa){

  $rows=null;
    $modelo = new Conexion();
    $conexion=$modelo->get_conexion();
    $casa="%".$arg_casa."%";
    $sql="select * from grupo_familiar where cedula_miembro like :casa";
    $statement=$conexion->prepare($sql);
    $statement->bindParam(":casa",$casa);
    $statement->execute();
    while ($result=$statement->fetch()) {
      
      $rows[]=$result;
    }

    return $rows;
}



//combo de numero de viviendas
 public function combo(){
    $rows=null;
    $modelo = new Conexion();
    $conexion=$modelo->get_conexion();
    $sql="select * from ubicacion_geografica ";
    $statement=$conexion->prepare($sql);
    $statement->execute();
    while ($result=$statement->fetch()) {
      
      $rows[]=$result;
    }

    return $rows;
  }

//combo de numero de cedula del jefe
   public function combo2(){
    $rows=null;
    $modelo = new Conexion();
    $conexion=$modelo->get_conexion();
    $sql="select * from jefes_familia ";
    $statement=$conexion->prepare($sql);
    $statement->execute();
    while ($result=$statement->fetch()) {
      
      $rows[]=$result;
    }

    return $rows;
  }

    //cargar adultos mayores
   public function cargarAdultos(){
    $rows=null;
    $modelo = new Conexion();
    $conexion=$modelo->get_conexion();
    $sql="select * from jefes_familia where edad >=50 "; 
    $statement=$conexion->prepare($sql);
    $statement->execute();
    while ($result=$statement->fetch()) {
      
      $rows[]=$result;
    }

    return $rows;
  }

  public function cargarAdultos2(){
    $rows=null;
    $modelo = new Conexion();
    $conexion=$modelo->get_conexion();
    $sql="select * from grupo_familiar   where edad_miembro >=50"; 
    $statement=$conexion->prepare($sql);
    $statement->execute();
    while ($result=$statement->fetch()) {
      
      $rows[]=$result;
    }

    return $rows;
  }

//cargar menores de edad
     public function cargarMenores(){
    $rows=null;
    $modelo = new Conexion();
    $conexion=$modelo->get_conexion();
    $sql="select * from grupo_familiar where edad_miembro <=18";
    $statement=$conexion->prepare($sql);
    $statement->execute();
    while ($result=$statement->fetch()) {
      
      $rows[]=$result;
    }

    return $rows;
  }

     public function cargarEmbarazadas(){
    $rows=null;
    $modelo = new Conexion();
    $conexion=$modelo->get_conexion();
    $sql="select * from jefes_familia where embarazada = 'si'";
    $statement=$conexion->prepare($sql);
    $statement->execute();
    while ($result=$statement->fetch()) {
      
      $rows[]=$result;
    }

    return $rows;
  }

   public function cargarEmbarazada2(){
    $rows=null;
    $modelo = new Conexion();
    $conexion=$modelo->get_conexion();
    $sql="select * from grupo_familiar where embarazada_m = 'si'";
    $statement=$conexion->prepare($sql);
    $statement->execute();
    while ($result=$statement->fetch()) {
      
      $rows[]=$result;
    }

    return $rows;
  }

       public function cargarDiscapacidad(){
    $rows=null;
    $modelo = new Conexion();
    $conexion=$modelo->get_conexion();
    $sql="select * from jefes_familia where discapacitado='si'"; 

    $statement=$conexion->prepare($sql);
    $statement->execute();
    while ($result=$statement->fetch()) {
      
      $rows[]=$result;
    }

    return $rows;
  }
         public function cargarDiscapacidad2(){
    $rows=null;
    $modelo = new Conexion();
    $conexion=$modelo->get_conexion();
    $sql="select * from grupo_familiar where discapacidad_miembro ='si'"; 

    $statement=$conexion->prepare($sql);
    $statement->execute();
    while ($result=$statement->fetch()) {
      
      $rows[]=$result;
    }

    return $rows;
  }

}
