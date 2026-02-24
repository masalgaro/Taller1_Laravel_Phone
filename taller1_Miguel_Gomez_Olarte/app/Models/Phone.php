<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;

    /**
     * PHONE ATTRIBUTES
     * $this->attributes['id'] - int - contains the phone id.
     * $this->attributes['name'] - string - contains the name of the phone.
     * $this->attributes['brand'] - string - contains the brand of the phone.
     * $this->attributes['quantity'] - int - how many phones there are in stock.
     * $this->attributes['battery'] - string - phone's battery specs.
     * $this->attributes['ram'] - string - phone's ram specs.
     * $this->attributes['memory'] - string - phone's internal memory specs;
     * $this->attributes['picurl'] - string - URL to a reference picture of the phone;
     */
    public static function validate($request)
    {
        $request->validate([
            'name' => 'required',
            'brand' => 'required',
            'quantity' => 'required',
            'battery' => 'required',
            'ram' => 'required',
            'memory' => 'required',
            'picurl' => 'required',
        ]);
    }

    protected $fillable = ['name', 'brand', 'quantity', 'battery', 'ram', 'memory', 'picurl'];

    public function getId(): int
    {
        return $this->attributes['id'];
    }

    public function setId($id): void
    {
        $this->attributes['id'] = $id;
    }

    public function getName(): string
    {
        return $this->attributes['name'];
    }

    public function setName($name): void
    {
        $this->attributes['name'] = $name;
    }

    public function getBrand(): string
    {
        return $this->attributes['brand'];
    }

    public function setBrand($brand): void
    {
        $this->attributes['brand'] = $brand;
    }

    public function getQuantity(): int
    {
        return $this->attributes['quantity'];
    }

    public function setQuantity($quantity): void
    {
        $this->attributes['quantity'] = $quantity;
    }

    public function getBattery(): string
    {
        return $this->attributes['battery'];
    }

    public function setBattery($battery): void
    {
        $this->attributes['battery'] = $battery;
    }

    public function getRAM(): string
    {
        return $this->attributes['ram'];
    }

    public function setRAM($ram): void
    {
        $this->attributes['ram'] = $ram;
    }

    public function getMemory(): string
    {
        return $this->attributes['memory'];
    }

    public function setMemory($memory): void
    {
        $this->attributes['memory'] = $memory;
    }

    public function getPicURL(): string
    {
        return $this->attributes['picurl'];
    }

    public function setPicURL($picurl): void
    {
        $this->attributes['picurl'] = $picurl;
    }
}
