<?php

namespace App\Services;

use Xendit\Configuration;
use Xendit\Invoice\InvoiceApi;
use Xendit\Invoice\CreateInvoiceRequest;

class XenditService
{
    protected $invoiceApi;

    public function __construct()
    {
        Configuration::setXenditKey(config('services.xendit.secret_key'));
        $this->invoiceApi = new InvoiceApi();
    }

    /**
     * Create a new invoice in Xendit
     * 
     * @param string $externalId
     * @param int $amount
     * @param string $payerEmail
     * @param string $description
     * @return \Xendit\Invoice\Invoice
     */
    public function createInvoice($externalId, $amount, $payerEmail, $description)
    {
        $createInvoiceRequest = new CreateInvoiceRequest([
            'external_id' => $externalId,
            'amount' => $amount,
            'payer_email' => $payerEmail,
            'description' => $description,
            'currency' => 'IDR',
            // Default 24 hours expiry
            'invoice_duration' => 86400,
            // 'success_redirect_url' => route('checkout.success'),
            // 'failure_redirect_url' => route('checkout.failure'),
        ]);

        return $this->invoiceApi->createInvoice($createInvoiceRequest);
    }
}
