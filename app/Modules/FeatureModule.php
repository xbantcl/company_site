<?php namespace App\Modules;

use App\Models\Feature;

class FeatureModule
{
    /**
     * 獲取產品特色.
     * 
     * @return array
     */
    public function getFeatures()
    {
        return Feature::select('id', 'name', 'file_url')->get();
    }
}
