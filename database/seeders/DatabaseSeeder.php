<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        /*
         // Interfaz Audio
         \App\Models\Product::create([
            'modelo' => 'Scarlett 2i2 3ra',
            'precio' => 180000,
            'stock' => 35,
            'imagen' => '654654654654.jpg',
            'category_id' => 1,
            'brand_id' => 1,
         ]);
         \App\Models\Product::create([
            'modelo' => 'Scarlett Solo 3ra',
            'precio' => 140000,
            'stock' => 47,
            'imagen' => '654654654654.jpg',
            'category_id' => 1,
            'brand_id' => 1,
         ]);
         // Monitor
         \App\Models\Product::create([
            'modelo' => 'Rokit 5 G3',
            'precio' => 150000,
            'stock' => 17,
            'imagen' => '654654654654.jpg',
            'category_id' => 2,
            'brand_id' => 2,
         ]);
         // Microfono
         \App\Models\Product::create([
            'modelo' => 'Producto Microfono',
            'precio' => 180000,
            'stock' => 35,
            'imagen' => '654654654654.jpg',
            'category_id' => 3,
         ]);
         // Controlador
         \App\Models\Product::create([
            'modelo' => 'Producto Controlador DJ',
            'precio' => 180000,
            'stock' => 35,
            'imagen' => '654654654654.jpg',
            'category_id' => 4,
         ]);
        // Teclado
        \App\Models\Product::create([
            'modelo' => 'Producto Teclado',
            'precio' => 180000,
            'stock' => 35,
            'imagen' => '654654654654.jpg',
            'category_id' => 5,
         ]);
         // Mixer
         \App\Models\Product::create([
            'modelo' => 'Producto Mezcladora',
            'precio' => 180000,
            'stock' => 35,
            'imagen' => '654654654654.jpg',
            'category_id' => 6,
         ]);
         // Audifono
         \App\Models\Product::create([
            'modelo' => 'Producto Audifono',
            'precio' => 180000,
            'stock' => 35,
            'imagen' => '654654654654.jpg',
            'category_id' => 7,
         ]);
         */


         // Categorias
         // 1
         \App\Models\Category::create([
            'nombre' => 'Interfaces de Audio',
            'descripcion' => 'Dispositivo que convierte la señal eléctrica en digital para poder trabajarla en un DAW',
         ]);
         // 2
         \App\Models\Category::create([
            'nombre' => 'Monitores de estudio',
            'descripcion' => 'Altavoces que reproducen una señal de audio de forma transparente',
         ]);
         /*
         // 3
         \App\Models\Category::create([
            'nombre' => 'Microfonos',
            'descripcion' => 'Dispositivo de entrada que se usa para procesos de grabación',
         ]);
         // 4
         \App\Models\Category::create([
            'nombre' => 'Controladores DJ',
            'descripcion' => 'dispositivo utilizado por los djs para mezclar música usando un determinado software',
         ]);
         // 5
         \App\Models\Category::create([
            'nombre' => 'Teclados',
            'descripcion' => 'Dispositivo que genera y transmite datos de interfaz MIDI',
         ]);
         // 6
         \App\Models\Category::create([
            'nombre' => 'Mezcladoras',
            'descripcion' => 'Disposiviivo que permite mezclar y alterar diversas fuentes de audio',
         ]);
         // 7
         \App\Models\Category::create([
            'nombre' => 'Audífonos',
            'descripcion' => 'Dispositivo que reproduce una señal de audio',
         ]);
        */

         // Atributos
         // Interfaz de audio
         \App\Models\Attribute::create([
            'name' => 'Velocidad Muestreo',
            'category_id' => 1
         ]);
         \App\Models\Attribute::create([
            'name' => 'Entradas',
            'category_id' => 1
         ]);
         \App\Models\Attribute::create([
            'name' => 'Salidas',
            'category_id' => 1
         ]);
         // Monitores de estudio
         \App\Models\Attribute::create([
            'name' => 'Pulgadas',
            'category_id' => 2
         ]);
         \App\Models\Attribute::create([
            'name' => 'Respuesta Frecuencia',
            'category_id' => 2
         ]);
         \App\Models\Attribute::create([
            'name' => 'Es Activo',
            'category_id' => 2
         ]);
         \App\Models\Attribute::create([
            'name' => 'Entradas',
            'category_id' => 2
         ]);

         // Brands
         \App\Models\Brand::create([
            'name' => 'Focusrite',
         ]);
         \App\Models\Brand::create([
            'name' => 'Behringer',
         ]);

         /*
         // Producto/Atributo
         \App\Models\ProductAttribute::create([
            'product_id' => 1,
            'attribute_id' => 1,
            'value' => '192 khz / 24 bits'
         ]);
         \App\Models\ProductAttribute::create([
            'product_id' => 1,
            'attribute_id' => 2,
            'value' => '2x XLR / TRS'
         ]);
         \App\Models\ProductAttribute::create([
            'product_id' => 1,
            'attribute_id' => 3,
            'value' => '2x 1/4* TRS, 1x 1/4* TRS'
         ]);
         \App\Models\ProductAttribute::create([
            'product_id' => 2,
            'attribute_id' => 1,
            'value' => '192 khz / 24 bits'
         ]);
         \App\Models\ProductAttribute::create([
            'product_id' => 2,
            'attribute_id' => 2,
            'value' => '1x XLR / TRS'
         ]);
         // Monitor
         \App\Models\ProductAttribute::create([
            'product_id' => 3,
            'attribute_id' => 1,
            'value' => '5'
         ]);
         \App\Models\ProductAttribute::create([
            'product_id' => 3,
            'attribute_id' => 2,
            'value' => '46 Hz-34,5 kHz'
         ]);
         \App\Models\ProductAttribute::create([
            'product_id' => 3,
            'attribute_id' => 3,
            'value' => 'SI'
         ]);
         \App\Models\ProductAttribute::create([
            'product_id' => 3,
            'attribute_id' => 4,
            'value' => 'TRS / XLR'
         ]);
         */
    }
}
