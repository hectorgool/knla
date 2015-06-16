#!/usr/bin/perl


system("clear");
open( BASE, "equipo.txt" ) || die "Error al abrir archivo";

@base = <BASE>;

foreach ( @base ) {

	@campos=split(/\t/, $_);

	$id  	  = $campos[0];
	$equipo = $campos[1];

	#print "$id\t $equipo";

  chop $equipo;

  print "
  array(
    'id' => $id,    
    'nombre' =>'$equipo'
  ),";

}

print "\n";

close( BASE );
