<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SiteContent;

class SiteContentSeeder extends Seeder
{
    public function run(): void
    {
        $contents = [
            // Hero Section
            ['section' => 'hero', 'key' => 'title', 'value' => 'جودة تستحق'],
            ['section' => 'hero', 'key' => 'subtitle', 'value' => 'الثقة'],
            ['section' => 'hero', 'key' => 'description', 'value' => 'نلتزم بتقديم أفضل المنتجات الغذائية والاستهلاكية بأعلى معايير الجودة العالمية لتلبية احتياجاتكم اليومية.'],
            ['section' => 'hero', 'key' => 'image', 'value' => '/images/showroom.jpg'],
            
            // About Section
            ['section' => 'about', 'key' => 'title', 'value' => 'شريككم الموثوق في عالم التجارة'],
            ['section' => 'about', 'key' => 'description', 'value' => 'تأسست شركة محاسن الشرق برؤية طموحة لتكون الرائدة في مجال توريد وتوزيع المنتجات الاستهلاكية والغذائية. نحن نؤمن بأن الجودة هي أساس النجاح، ولذلك نحرص على اختيار أفضل المنتجات من أرقى المصادر العالمية.'],
            ['section' => 'about', 'key' => 'image', 'value' => '/images/warehouse.jpg'],
            
            // Services Section
            ['section' => 'services', 'key' => 'title', 'value' => 'منتجاتنا وخدماتنا'],
            ['section' => 'services', 'key' => 'image1', 'value' => '/images/products-1.jpg'],
            ['section' => 'services', 'key' => 'image2', 'value' => '/images/products-2.jpg'],
            
            // Contact Section
            ['section' => 'contact', 'key' => 'phone', 'value' => '+966 11 234 5678'],
            ['section' => 'contact', 'key' => 'email', 'value' => 'info@mahasinalsharq.com'],
            ['section' => 'contact', 'key' => 'address', 'value' => 'شارع الملك فهد، حي العليا، الرياض، المملكة العربية السعودية'],
        ];

        foreach ($contents as $content) {
            SiteContent::updateOrCreate(
                ['section' => $content['section'], 'key' => $content['key']],
                ['value' => $content['value']]
            );
        }
    }
}
