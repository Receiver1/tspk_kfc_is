<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
    ];

    protected $hidden = [];

    protected $casts = [];

    public function products() {
        return $this->belongsToMany(Product::class, 'orders_to_products');
    }

    public function status_class() {
        switch ($this->status) {
            case 'waiting':
                return '';
            case 'process':
                return 'status-process';
            case 'complete':
                return 'status-complete';
            default:
                return '';
        }
    }

    public function status() {
        switch ($this->status) {
            case 'waiting':
                return 'Ожидает';
            case 'process':
                return 'В разработке';
            case 'complete':
                return 'Готов';
            default:
                return 'Не указан';
        }
    }

    public function status_icon() {
        switch ($this->status) {
            case 'waiting':
                return '<svg width="17" height="13" viewBox="0 0 17 13" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M5.84383 12.5937L0.010498 6.76038L1.13029 5.64058L5.84383 10.3541L15.8438 0.354126L16.9636 1.47392L5.84383 12.5937Z"
                                fill="#0D0D0D" />
                        </svg>';
            case 'process':
                return base64_encode(`<svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.42188 18.875C6.83507 18.875 4.63889 17.9592 2.83333 16.1276C1.02778 14.296 0.125 12.0781 0.125 9.47396H1.6875C1.6875 11.6441 2.43403 13.4931 3.92708 15.0208C5.42014 16.5486 7.25174 17.3125 9.42188 17.3125C11.6267 17.3125 13.4931 16.5399 15.0208 14.9948C16.5486 13.4497 17.3125 11.5747 17.3125 9.36979C17.3125 7.21701 16.5399 5.39844 14.9948 3.91406C13.4497 2.42969 11.592 1.6875 9.42188 1.6875C8.24132 1.6875 7.13455 1.9566 6.10156 2.49479C5.06858 3.03299 4.17014 3.74479 3.40625 4.63021H6.14062V6.19271H0.697917V0.776042H2.26042V3.53646C3.16319 2.47743 4.23524 1.6441 5.47656 1.03646C6.71788 0.428819 8.03299 0.125 9.42188 0.125C10.724 0.125 11.9479 0.368056 13.0937 0.854167C14.2396 1.34028 15.2422 2.00434 16.1016 2.84635C16.9609 3.68837 17.638 4.67361 18.1328 5.80208C18.6276 6.93056 18.875 8.14583 18.875 9.44792C18.875 10.75 18.6276 11.974 18.1328 13.1198C17.638 14.2656 16.9609 15.2639 16.1016 16.1146C15.2422 16.9653 14.2396 17.638 13.0937 18.1328C11.9479 18.6276 10.724 18.875 9.42188 18.875ZM12.7552 13.7448L8.74479 9.78646V4.21354H10.3073V9.13542L13.875 12.625L12.7552 13.7448Z"
                                fill="#0D0D0D" />
                        </svg>`);
            case 'complete':
                return base64_encode(`<svg width="23" height="13" viewBox="0 0 23 13" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M6.65633 12.6978L0.822998 6.8645L1.94279 5.74471L6.65633 10.4583L7.77612 11.578L6.65633 12.6978ZM11.0834 12.6978L5.25008 6.8645L6.36987 5.74471L11.0834 10.4583L21.0834 0.458252L22.2032 1.57804L11.0834 12.6978ZM11.0834 8.27075L9.96362 7.15096L16.6563 0.458252L17.7761 1.57804L11.0834 8.27075Z"
                                fill="#0D0D0D" />
                        </svg>`);
            default:
                return '';
        }
    }
}
