<?php class Schools
{
  var $name = "UIN Sultan Syarif Kasim Riau";
  var $year_in = 2014;
  var $year_out = 2019;
  var $major = "TI";
}

function biodata ()
{
  $hobbies    = array ("Batminton", "Football");
  $is_married = FALSE;
  $status;
  if ($is_married == FALSE) {
      $status = "single";
  }else {
      $status = "married";
  }
  $schools    = new Schools ();
  $biodata = array ("name" =>"Ridho afni", "age"=>22, "address" =>"Jl. Garuda Sakti, Kel. Tuah Madani, Kota Pekanbaru", "is_married"=>$status, "hobbies" =>$hobbies, "schools" =>$schools);

  echo json_encode ($biodata);
}

echo biodata ();
?>
