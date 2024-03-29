<?php
namespace App\Events;

use App\Models\Vendor;
use Illuminate\Queue\SerializesModels;

/**
 * Class VendorWasRestored.
 */
class VendorWasRestored extends Event
{
    use SerializesModels;

    /**
     * @var Vendor
     */
    public $vendor;

    /**
     * Create a new event instance.
     *
     * @param Vendor $vendor
     */
    public function __construct(Vendor $vendor)
    {
        $this->vendor = $vendor;
    }
}
