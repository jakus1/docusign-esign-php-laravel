<?php

/*
DOCUSIGN_EMAIL=
DOCUSIGN_PASSWORD=
DOCUSIGN_HOST=https://demo.docusign.net
DOCUSIGN_INTEGRATOR_KEY=fe7a1d9c-8aa3-4366-8c99-e1c3abc5f844
DOCUSIGN_INTEGRATOR_KEY_SECRET=a0b5670e-05af-4e6b-a94a-246f26a1006f
DOCUSIGN_IMPERSONATED_USER_ID=b5f6bfe7-6878-48d3-8c9f-2e25809ca46e
*/
return [

    /**
     * The DocuSign Integrator's Key
     */

    'integrator_key' => env('DOCUSIGN_INTEGRATOR_KEY'),

    /**
     * The DocuSign Host
     */

    'host' => env('DOCUSIGN_HOST'),

    /**
     * The Docusign Account Email
     */
    'email' => env('DOCUSIGN_EMAIL'),

    /**
     * The Docusign Account Password
     */
    'password' => env('DOCUSIGN_PASSWORD'),

    /**
     * The version of DocuSign API (Ex: v1, v2)
     */
    'version' => 'v2',

    /**
     * The DocuSign Environment (Ex: demo, test, www)
     */
    'environment' => 'demo',

    /**
     * The DocuSign Account Id
     */
    'account_id' => '',

    /**
     * The DocuSign Account Id
     */
    'user_id' => env('DOCUSIGN_IMPERSONATED_USER_ID'),

    /**
     * Envelope ID field (for Envelope trait)
     */
    'envelope_field' => 'envelopeId',

    /**
     * Envelope ID field (for Envelope trait)
     */
    'public_key' => env('DOCUSIGN_PUBLIC_KEY'),

    /**
     * Envelope ID field (for Envelope trait)
     */
    'private_key' => env('DOCUSIGN_PRIVATE_KEY'),
];