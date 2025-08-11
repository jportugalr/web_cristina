<?php
namespace App\Services;

use Illuminate\Support\Facades\Cache;

/**
 * Servicio genérico para cachear consultas de modelos Eloquent.
 *
 * Permite obtener resultados de cualquier modelo, con relaciones y filtros opcionales,
 * almacenando el resultado en caché para mejorar el rendimiento y reducir la carga a la base de datos.
 */
class ModelCacheService
{
    /**
     * Obtiene y cachea los resultados de una consulta Eloquent.
     *
     * @param string $modelClass   Clase del modelo Eloquent (por ejemplo, App\Models\Product::class).
     * @param array  $relations    Relaciones a cargar con 'with' (por ejemplo, ['category', 'images']).
     * @param array  $filters      Filtros para aplicar en la consulta (cada filtro es un array compatible con where).
     * @param string|null $cacheKey Clave personalizada para el caché. Si es null, se genera automáticamente.
     * @param int    $minutes      Minutos que se mantendrá el resultado en caché.
     *
     * @return \Illuminate\Support\Collection  Colección de resultados del modelo.
     */
    public function getCached($modelClass, $relations = [], $filters = [], $cacheKey = null, $minutes = 60*24)
    {
        $cacheKey = $cacheKey ?? $modelClass . '.' . md5(json_encode($relations) . json_encode($filters));
        return Cache::remember($cacheKey, $minutes, function () use ($modelClass, $relations, $filters) {
            $query = $modelClass::query();
            if ($relations) $query->with($relations);
            foreach ($filters as $filter) {
                $query->where(...$filter);
            }
            return $query->get();
        });
    }
}