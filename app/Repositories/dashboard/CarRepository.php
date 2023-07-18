<?php

namespace App\Repositories\dashboard;

use App\Exceptions\GeneralException;
use App\Models\Car;
use App\Repositories\BaseRepository;
use App\Traits\UploadFiles;
use Illuminate\Support\Facades\DB;

class CarRepository extends BaseRepository
{
    use UploadFiles;

    public function model()
    {
        return Car::class;
    }

    public function create(array $data)
    {
        return DB::transaction(function () use ($data) {
            $car = parent::create([
                'maker' => ucfirst($data['maker']),
                'model' => ucfirst($data['model']),
                'year' => $data['year'],
                'title' => $data['title'],
                'steering_side' => $data['steering_side'],
                'km' => $data['km'],
                'regional_specs' => $data['regional_specs'],
                'warranty' => isset($data['warranty']) ? 1 : 0,
                'color' => $data['color'],
                'doors' => $data['doors'],
                'body_condition' => $data['body_condition'],
                'mechanical_condition' => $data['mechanical_condition'],
                'interior_color' => $data['interior_color'],
                'seller_type' => $data['seller_type'],
                'body_type' => $data['body_type'],
                'no_cylinders' => $data['no_cylinders'],
                'transmission_type' => $data['transmission_type'],
                'horse_power' => $data['horse_power'],
                'fuel_type' => $data['fuel_type'],
                'extras' => $data['extras'],
                'price_aed' => $data['price_aed'],
                'price_africa' => $data['price_africa'],
                'price_dealer_aed' => $data['price_dealer_aed'],
                'price_dealer_africa' => $data['price_dealer_africa'],
                'description' => $data['description'],
                'whatsapp_uae' => $data['whatsapp_uae'],
                'whatsapp_africa' => $data['whatsapp_africa'],
                'main_image' => $this->UploadFile($data['image'],
                    IMG_CAR_PATH.$data['maker'].'_'.$data['model'].'/'.$data['year']
                ),
            ]);
            if (isset($data['car_images'])) {
                foreach ($data['car_images'] as $image) {
                    $path = $this->UploadFile($image,
                        IMG_CAR_PATH.$data['maker'].'_'.$data['model'].'/'.$data['year']
                    );
                    $car->images()->create(['image_url' => $path]);
                }
            }

            return $car;
        });
        throw new GeneralException('error');
    }

    public function update(array $data, Car $car)
    {
        return DB::transaction(function () use ($car, $data) {
            if ($car->update([
                'maker' => ucfirst($data['maker']) ?? $car->maker,
                'model' => ucfirst($data['model']) ?? $car->model,
                'year' => $data['year'] ?? $car->year,
                'title' => $data['title'] ?? $car->title,
                'km' => $data['km'] ?? $car->km,
                'steering_side' => $data['steering_side'] ?? $car->steering_side,
                'regional_specs' => $data['regional_specs'] ?? $car->regional_specs,
                'warranty' => isset($data['warranty']) ? 1 : 0,
                'color' => $data['color'] ?? $car->color,
                'doors' => $data['doors'] ?? $car->doors,
                'body_condition' => $data['body_condition'] ?? $car->body_condition,
                'mechanical_condition' => $data['mechanical_condition'] ?? $car->mechanical_condition,
                'interior_color' => $data['interior_color'] ?? $car->interior_color,
                'seller_type' => $data['seller_type'] ?? $car->seller_type,
                'body_type' => $data['body_type'] ?? $car->body_type,
                'transmission_type' => $data['transmission_type'] ?? $car->transmission_type,
                'horse_power' => $data['horse_power'] ?? $car->horse_power,
                'no_cylinders' => $data['no_cylinders'] ?? $car->no_cylinders,
                'fuel_type' => $data['fuel_type'] ?? $car->fuel_type,
                'extras' => $data['extras'] ?? $car->extras,
                'description' => $data['description'] ?? $car->description,
                'price_aed' => $data['price_aed'] ?? $car->price_aed,
                'whatsapp_uae' => $data['whatsapp_uae'] ?? $car->whatsapp_uae,
                'whatsapp_africa' => $data['whatsapp_africa'] ?? $car->whatsapp_africa,
                'price_africa' => $data['price_africa'] ?? $car->price_africa,
                'price_dealer_aed' => $data['price_dealer_aed'] ?? $car->price_dealer_aed,
                'price_dealer_africa' => $data['price_dealer_africa'] ?? $car->price_dealer_africa,
                'main_image' => isset($data['image']) ? $this->Updatefile($data['image'],
                    IMG_CAR_PATH.$data['maker'].'_'.$data['model'].'/'.$data['year'],
                    $car->main_image
                ) : $car->main_image,
            ])) {
                if (isset($data['car_images'])) {
                    foreach ($data['car_images'] as $image) {
                        $path = $this->UploadFile($image,
                            IMG_CAR_PATH.$data['maker'].'_'.$data['model'].'/'.$data['year']
                        );
                        $car->images()->create(['image_url' => $path]);
                    }
                }

                return $car;
            }
        });
        throw new GeneralException('error');
    }

    public function destroy($data)
    {
        $car = Car::findOrFail($data);
        if ($car) {
            DB::transaction(function () use ($car) {
                unlink(public_path('storage/'.$car->main_image));
                $paths = $car->images;
                foreach ($paths as $path) {
                    unlink(public_path('storage/'.$path->image_url));
                }
                $car->delete();

                return true;
            });
        } else {
            throw new GeneralException('error');
        }
    }
}
