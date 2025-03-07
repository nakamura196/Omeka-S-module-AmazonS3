<?php declare(strict_types=1);
namespace AmazonS3\Form;

use Laminas\Form\Element;
use Laminas\Form\Form;

class ConfigForm extends Form
{
    public function init(): void
    {
        $this
            ->add([
                'name' => 'amazons3_access_key_id',
                'type' => Element\Text::class,
                'options' => [
                    'label' => 'Access Key Id', // @translate
                    'info' => 'First part of access keys that grants programmatic access to your resources. Example: AKIAIOSFODNN7EXAMPLE', // @translate
                ],
                'attributes' => [
                    'id' => 'amazons3_access_key_id',
                    'required' => true,
                ],
            ])
            ->add([
                'name' => 'amazons3_secret_access_key',
                'type' => Element\Text::class,
                'options' => [
                    'label' => 'Secret Access Key', // @translate
                    'info' => 'Second part of access keys that grants programmatic access to your resources. Example: wJalrXUtnFEMI/K7MDENG/bPxRfiCYEXAMPLEKEY', // @translate
                ],
                'attributes' => [
                    'id' => 'amazons3_access_key_id',
                    'required' => true,
                ],
            ])
            ->add([
                'name' => 'amazons3_bucket',
                'type' => Element\Text::class,
                'options' => [
                    'label' => 'Bucket', // @translate
                    'info' => 'Public cloud storage resource available in AWS S3, an object storage offering. Similar to file folders, store objects, which consist of data and its descriptive metadata.', // @translate
                ],
                'attributes' => [
                    'id' => 'amazons3_bucket',
                    'required' => true,
                ],
            ])
            ->add([
                'name' => 'amazons3_region',
                'type' => Element\Text::class,
                'options' => [
                    'label' => 'Region', // @translate
                    'info' => sprintf(
                        'AWS S3 region. Navigate to %s for More info', // @translate
                        'https://docs.aws.amazon.com/general/latest/gr/rande.html'
                    ),
                ],
                'attributes' => [
                    'id' => 'amazons3_region',
                    'required' => true,
                ],
            ])
            ->add([
                'name' => 'amazons3_expiration',
                'type' => Element\Number::class,
                'options' => [
                    'label' => 'Expiration (minutes)', // @translate
                    'info' => 'If an expiration time is set and greater than zero, we\'re uploading private files and using signed URLs. If not, we\'re uploading public files.', // @translate
                ],
                'attributes' => [
                    'id' => 'amazons3_expiration',
                ],
            ])
            ->add([
                'name' => 'amazons3_endpoint',
                'type' => Element\Text::class,
                'options' => [
                    'label' => 'カスタムエンドポイントURL', // @translate
                    'info' => 'S3互換ストレージ（MinIO、Wasabi、Backblaze B2など）を使用する場合に指定します。AWSのS3を使用する場合は空白のままにしてください。', // @translate
                ],
                'attributes' => [
                    'id' => 'amazons3_endpoint',
                ],
            ])
            ->add([
                'name' => 'amazons3_use_path_style_endpoint',
                'type' => Element\Checkbox::class,
                'options' => [
                    'label' => 'パススタイルエンドポイントを使用', // @translate
                    'info' => '一部のS3互換ストレージではパススタイルエンドポイントが必要です。不明な場合はストレージプロバイダのドキュメントを確認してください。', // @translate
                ],
                'attributes' => [
                    'id' => 'amazons3_use_path_style_endpoint',
                ],
            ])
        ;

        $this->getInputFilter()
            ->add([
                'name' => 'amazons3_access_key_id',
                'required' => true,
            ])
            ->add([
                'name' => 'amazons3_secret_access_key',
                'required' => true,
            ])
            ->add([
                'name' => 'amazons3_bucket',
                'required' => true,
            ])
            ->add([
                'name' => 'amazons3_region',
                'required' => true,
            ])
        ;
    }
}
