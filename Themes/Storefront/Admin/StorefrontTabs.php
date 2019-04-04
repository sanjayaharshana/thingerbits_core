<?php

namespace Themes\Storefront\Admin;

use Modules\Admin\Ui\Tab;
use Modules\Admin\Ui\Tabs;
use Modules\Menu\Entities\Menu;
use Modules\Page\Entities\Page;
use Modules\Media\Entities\File;
use Modules\Slider\Entities\Slider;
use Modules\Product\Entities\Product;

class StorefrontTabs extends Tabs
{
    /**
     * Make new tabs with groups.
     *
     * @return void
     */
    public function make()
    {
        $this->group('general_settings', trans('storefront::storefront.tabs.group.general_settings'))
            ->active()
            ->add($this->general())
            ->add($this->logo())
            ->add($this->menus())
            ->add($this->socialLinks());

        $this->group('home_page_sections', trans('storefront::storefront.tabs.group.home_page_sections'))
            ->add($this->sliderBanners())
            ->add($this->bannerSectionOne())
            ->add($this->features())
            ->add($this->productCarousel())
            ->add($this->recentProducts())
            ->add($this->bannerSectionTwo())
            ->add($this->threeColumnVerticalProductCarousel())
            ->add($this->landscapeProducts())
            ->add($this->bannerSectionThree())
            ->add($this->productTabs())
            ->add($this->twoColumnProductCarousel())
            ->add($this->recentlyViewed())
            ->add($this->brands());
    }

    private function general()
    {
        return tap(new Tab('general', trans('storefront::storefront.tabs.general')), function (Tab $tab) {
            $tab->active();
            $tab->weight(5);
            $tab->fields(['storefront_slider', 'storefront_copyright_text']);
            $tab->view('admin.storefront.tabs.general', [
                'pages' => $this->getPages(),
                'sliders' => $this->getSliders(),
            ]);
        });
    }

    private function getPages()
    {
        $pages = Page::all()->pluck('name', 'id');

        return $pages->prepend(trans('storefront::storefront.form.please_select'), '');
    }

    private function getSliders()
    {
        $sliders = Slider::all()->sortBy('name')->pluck('name', 'id');

        return $sliders->prepend(trans('storefront::storefront.form.please_select'), '');
    }

    private function logo()
    {
        return tap(new Tab('logo', trans('storefront::storefront.tabs.logo')), function (Tab $tab) {
            $tab->weight(10);

            $favicon = File::findOrNew(setting('storefront_favicon'));
            $headerLogo = File::findOrNew(setting('storefront_header_logo'));
            $footerLogo = File::findOrNew(setting('storefront_footer_logo'));

            $tab->view('admin.storefront.tabs.logo', compact('favicon', 'headerLogo', 'footerLogo'));
        });
    }

    private function menus()
    {
        return tap(new Tab('menus', trans('storefront::storefront.tabs.menus')), function (Tab $tab) {
            $tab->weight(15);

            $tab->fields([
                'storefront_primary_menu',
                'storefront_category_menu',
                'storefront_category_menu_title',
                'storefront_footer_menu',
                'storefront_footer_menu_title',
            ]);

            $tab->view('admin.storefront.tabs.menus', [
                'menus' => $this->getMenus(),
            ]);
        });
    }

    private function getMenus()
    {
        $menus = Menu::all()->pluck('name', 'id');

        return $menus->prepend(trans('storefront::storefront.form.please_select'), '');
    }

    private function socialLinks()
    {
        return tap(new Tab('social_links', trans('storefront::storefront.tabs.social_links')), function (Tab $tab) {
            $tab->weight(20);

            $tab->fields([
                'storefront_fb_link',
                'storefront_twitter_link',
                'storefront_instagram_link',
                'storefront_linkedin_link',
                'storefront_pinterest_link',
                'storefront_gplus_link',
                'storefront_youtube_link',
            ]);

            $tab->view('admin.storefront.tabs.social_links');
        });
    }

    private function sliderBanners()
    {
        return tap(new Tab('slider_banners', trans('storefront::storefront.tabs.slider_banners')), function (Tab $tab) {
            $tab->weight(22);
            $tab->view('admin.storefront.tabs.slider_banners', [
                'banners' => Banner::allForSliderBanners(),
            ]);
        });
    }

    private function bannerSectionOne()
    {
        return tap(new Tab('banner_section_1', trans('storefront::storefront.tabs.banner_section_1')), function (Tab $tab) {
            $tab->weight(23);
            $tab->view('admin.storefront.tabs.banner_section_1', [
                'banners' => Banner::allForSectionOne(),
            ]);
        });
    }

    private function features()
    {
        return tap(new Tab('features', trans('storefront::storefront.tabs.features')), function (Tab $tab) {
            $tab->weight(25);
            $tab->view('admin.storefront.tabs.features');
        });
    }

    private function productCarousel()
    {
        return tap(new Tab('product_carousel', trans('storefront::storefront.tabs.product_carousel')), function (Tab $tab) {
            $tab->weight(30);
            $tab->view('admin.storefront.tabs.product_carousel', [
                'products' => $this->getProductListFromSetting('storefront_product_carousel_section_products'),
            ]);
        });
    }

    private function recentProducts()
    {
        return tap(new Tab('recent_products', trans('storefront::storefront.tabs.recent_products')), function (Tab $tab) {
            $tab->weight(35);
            $tab->view('admin.storefront.tabs.recent_products');
        });
    }

    private function bannerSectionTwo()
    {
        return tap(new Tab('banner_section_2', trans('storefront::storefront.tabs.banner_section_2')), function (Tab $tab) {
            $tab->weight(37);
            $tab->view('admin.storefront.tabs.banner_section_2', [
                'banner' => Banner::findByName('storefront_banner_section_2_banner'),
            ]);
        });
    }

    private function threeColumnVerticalProductCarousel()
    {
        return tap(new Tab('three_column_vertical_product_carousel', trans('storefront::storefront.tabs.three_column_vertical_product_carousel')), function (Tab $tab) {
            $tab->weight(40);
            $tab->view('admin.storefront.tabs.three_column_vertical_product_carousel', [
                'columnOneProducts' => $this->getProductListFromSetting('storefront_three_column_vertical_product_carousel_section_column_1_products'),
                'columnTwoProducts' => $this->getProductListFromSetting('storefront_three_column_vertical_product_carousel_section_column_2_products'),
                'columnThreeProducts' => $this->getProductListFromSetting('storefront_three_column_vertical_product_carousel_section_column_3_products'),
            ]);
        });
    }

    private function landscapeProducts()
    {
        return tap(new Tab('landscape_products', trans('storefront::storefront.tabs.landscape_products')), function (Tab $tab) {
            $tab->weight(45);
            $tab->view('admin.storefront.tabs.landscape_products', [
                'products' => $this->getProductListFromSetting('storefront_landscape_products_section_products'),
            ]);
        });
    }

    private function bannerSectionThree()
    {
        return tap(new Tab('banner_section_3', trans('storefront::storefront.tabs.banner_section_3')), function (Tab $tab) {
            $tab->weight(47);
            $tab->view('admin.storefront.tabs.banner_section_3', [
                'banners' => Banner::allForSectionThree(),
            ]);
        });
    }

    private function productTabs()
    {
        return tap(new Tab('product_tabs', trans('storefront::storefront.tabs.product_tabs')), function (Tab $tab) {
            $tab->weight(50);
            $tab->view('admin.storefront.tabs.product_tabs', [
                'tabOneProducts' => $this->getProductListFromSetting('storefront_product_tabs_section_tab_1_products'),
                'tabTwoProducts' => $this->getProductListFromSetting('storefront_product_tabs_section_tab_2_products'),
                'tabThreeProducts' => $this->getProductListFromSetting('storefront_product_tabs_section_tab_3_products'),
                'tabFourProducts' => $this->getProductListFromSetting('storefront_product_tabs_section_tab_4_products'),
            ]);
        });
    }

    private function twoColumnProductCarousel()
    {
        return tap(new Tab('two_column_product_carousel', trans('storefront::storefront.tabs.two_column_product_carousel')), function (Tab $tab) {
            $tab->weight(55);
            $tab->view('admin.storefront.tabs.two_column_product_carousel', [
                'columnOneProducts' => $this->getProductListFromSetting('storefront_two_column_product_carousel_section_column_1_products'),
                'columnTwoProducts' => $this->getProductListFromSetting('storefront_two_column_product_carousel_section_column_2_products'),
            ]);
        });
    }

    private function getProductListFromSetting($key)
    {
        return Product::list(setting($key, []));
    }

    private function recentlyViewed()
    {
        return tap(new Tab('recently_viewed', trans('storefront::storefront.tabs.recently_viewed')), function (Tab $tab) {
            $tab->weight(60);
            $tab->view('admin.storefront.tabs.recently_viewed');
        });
    }

    private function brands()
    {
        return tap(new Tab('brands', trans('storefront::storefront.tabs.brands')), function (Tab $tab) {
            $tab->weight(65);
            $tab->view('admin.storefront.tabs.brands', [
                'brands' => File::find(setting('storefront_brands', [])),
            ]);
        });
    }
}
