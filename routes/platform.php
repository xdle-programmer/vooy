<?php

declare(strict_types=1);
use App\Orchid\Screens;
use App\Orchid\Screens\Examples\ExampleCardsScreen;
use App\Orchid\Screens\Examples\ExampleChartsScreen;
use App\Orchid\Screens\Examples\ExampleFieldsAdvancedScreen;
use App\Orchid\Screens\Examples\ExampleFieldsScreen;
use App\Orchid\Screens\Examples\ExampleLayoutsScreen;
use App\Orchid\Screens\Examples\ExampleScreen;
use App\Orchid\Screens\Examples\ExampleTextEditorsScreen;
use App\Orchid\Screens\PlatformScreen;
use App\Orchid\Screens\Role\RoleEditScreen;
use App\Orchid\Screens\Role\RoleListScreen;
use App\Orchid\Screens\User\UserEditScreen;
use App\Orchid\Screens\User\UserListScreen;
use App\Orchid\Screens\User\UserProfileScreen;

use App\Orchid\Screens\StatusScreen;
use App\Orchid\Screens\SubstatusScreen;
use App\Orchid\Screens\SubstatusEditScreen;

use App\Orchid\Screens\TenderScreen;
use App\Orchid\Screens\TenderProductScreen;
use App\Orchid\Screens\TenderModerationScreen;
use App\Orchid\Screens\TenderReviewCreationScreen;
use App\Orchid\Screens\TenderParthnerScreen;

use App\Orchid\Screens\TenderOwnershipScreen;
use App\Orchid\Screens\TenderOwnershipEditScreen;

use App\Orchid\Screens\TenderTimeoutScreen;

use App\Orchid\Screens\TenderSertificatScreen;
use App\Orchid\Screens\TenderSertificatEditScreen;

use App\Orchid\Screens\ProviderDistributor;
use App\Orchid\Screens\ProviderSellerRep;
use App\Orchid\Screens\ProviderSellerRu;
use App\Orchid\Screens\ProviderConnector;

use App\Orchid\Screens\Currencies;

use App\Orchid\Screens\TenderChatListScreen;
use App\Orchid\Screens\TenderChatScreen;

use App\Orchid\Screens\ProductCategoryScreen;
use App\Orchid\Screens\ProductCategoryEditScreen;
use App\Orchid\Screens\ProductCharacteristicScreen;
use App\Orchid\Screens\ProductCharacteristicEditScreen;
use App\Orchid\Screens\ProductCategoryCharacteristicScreen;
use App\Orchid\Screens\ProductCharacteristicValuesScreen;



use Illuminate\Support\Facades\Route;
use Tabuna\Breadcrumbs\Trail;

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the need "dashboard" middleware group. Now create something great!
|
*/

// Main
Route::screen('/main', PlatformScreen::class)
    ->name('platform.main');

//STATUS
Route::screen('status', StatusScreen::class)->name('platform.status');

Route::screen('substatuses', SubstatusScreen::class)->name('platform.substatus');
Route::screen('substatus/{substatus?}', SubstatusEditScreen::class)->name('platform.substatus.edit');

//TENDER
Route::screen('tenders', TenderScreen::class)->name('platform.tender');
Route::screen('tender/{tender?}', TenderProductScreen::class)->name('platform.tender.products');
Route::screen('tender/moderation/{tender?}', TenderModerationScreen::class)->name('platform.tender.moderation');
Route::screen('tender/review/{tender?}', TenderReviewCreationScreen::class)->name('platform.tender.review');
Route::screen('tender/parthner/{tender?}', TenderParthnerScreen::class)->name('platform.tender.parthner');
Route::screen('tender/timer/edit', TenderTimeoutScreen::class)->name('platform.tender.timer');


//CHATS
Route::screen('chats', TenderChatListScreen::class)->name('platform.chats');
Route::screen('chat/{chat?}', TenderChatScreen::class)->name('platform.chat');

//TENDER OWNERSHIP
Route::screen('ownerships', TenderOwnershipScreen::class)->name('platform.ownership');
Route::screen('ownership/{ownership?}', TenderOwnershipEditScreen::class)->name('platform.ownership.edit');

//TENDER SERTIFICAT
Route::screen('sertificats', TenderSertificatScreen::class)->name('platform.sertificat');
Route::screen('sertificat/{sertificat?}', TenderSertificatEditScreen::class)->name('platform.sertificat.edit');

//PROVIDER
Route::screen('distributors', ProviderDistributor::class)->name('platform.distributors');
Route::screen('sellerReps', ProviderSellerRep::class)->name('platform.sellerReps');
Route::screen('sellerRus', ProviderSellerRu::class)->name('platform.sellerRus');
Route::screen('connectors', ProviderConnector::class)->name('platform.connectors');

//Currency
Route::screen('currencies', Currencies::class)->name('platform.currencies');

//PRODUCT
Route::screen('products', Screens\ProductListScreen::class)->name('platform.products');

//CATEGORY
Route::screen('categories', ProductCategoryScreen::class)->name('platform.categories');
Route::screen('category/{category?}', ProductCategoryEditScreen::class)->name('platform.category.edit');
Route::screen('category/characteristics/{category?}', ProductCategoryCharacteristicScreen::class)->name('platform.category.characteristics');

//CHARACTERISTIC
Route::screen('characteristics', ProductCharacteristicScreen::class)->name('platform.characteristics');
Route::screen('characteristic/{characteristic?}', ProductCharacteristicEditScreen::class)->name('platform.characteristic.edit');
Route::screen('characteristic/selects/{characteristic?}', ProductCharacteristicValuesScreen::class)->name('platform.characteristic.selects');




// Platform > Profile
Route::screen('profile', UserProfileScreen::class)
    ->name('platform.profile')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Profile'), route('platform.profile'));
    });

// Platform > System > Users
Route::screen('users/{user}/edit', UserEditScreen::class)
    ->name('platform.systems.users.edit');

// Platform > System > Users > Create
Route::screen('users/create', UserEditScreen::class)
    ->name('platform.systems.users.create')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.systems.users')
            ->push(__('Create'), route('platform.systems.users.create'));
    });

// Platform > System > Users > User
Route::screen('users', UserListScreen::class)
    ->name('platform.systems.users')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Users'), route('platform.systems.users'));
    });

// Platform > System > Roles > Role
Route::screen('roles/{roles}/edit', RoleEditScreen::class)
    ->name('platform.systems.roles.edit')
    ->breadcrumbs(function (Trail $trail, $role) {
        return $trail
            ->parent('platform.systems.roles')
            ->push(__('Role'), route('platform.systems.roles.edit', $role));
    });

// Platform > System > Roles > Create
Route::screen('roles/create', RoleEditScreen::class)
    ->name('platform.systems.roles.create')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.systems.roles')
            ->push(__('Create'), route('platform.systems.roles.create'));
    });

// Platform > System > Roles
Route::screen('roles', RoleListScreen::class)
    ->name('platform.systems.roles')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Roles'), route('platform.systems.roles'));
    });

// Example...
Route::screen('example', ExampleScreen::class)
    ->name('platform.example')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Example screen'));
    });

Route::screen('example-fields', ExampleFieldsScreen::class)->name('platform.example.fields');
Route::screen('example-layouts', ExampleLayoutsScreen::class)->name('platform.example.layouts');
Route::screen('example-charts', ExampleChartsScreen::class)->name('platform.example.charts');
Route::screen('example-editors', ExampleTextEditorsScreen::class)->name('platform.example.editors');
Route::screen('example-cards', ExampleCardsScreen::class)->name('platform.example.cards');
Route::screen('example-advanced', ExampleFieldsAdvancedScreen::class)->name('platform.example.advanced');

//Route::screen('idea', 'Idea::class','platform.screens.idea');
