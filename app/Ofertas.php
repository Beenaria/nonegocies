<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ofertas extends Model
{
    protected $fillable = [
        'nombre',
        'slug',
        'descripcion',
        'empresa_id',
        'categoria_id',
        'precio',
        'tipo'
    ];

    public function ofertas()
    {
    	$ofertas = Ofertas::where('estatus' , '>' , 0)->get();

    	return $ofertas;
    }

    public function getOfertasCategoria($categoriaId)
    {
        $ofertas = Ofertas::where('estatus', '>' , 0)
                            ->where('categoria_id' , $categoriaId)
                            ->get();

    	return $ofertas;
    }

    public function getOfertaSlug($slug)
    {
        $oferta = Ofertas::where('slug' , $slug)->first();

        return $oferta;
    }

    public function getOfertasMenorPrecio($categoriaId , $precio)
    {
        $ofertas = Ofertas::where('precio_diario' , '<=' , $precio)
                            ->where('categoria_id' , $categoriaId)
                            ->get();

        return $ofertas;
    }

    //Relaciones

    public function empresa()
    {
        return $this->belongsTo(Empresa::class);
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
