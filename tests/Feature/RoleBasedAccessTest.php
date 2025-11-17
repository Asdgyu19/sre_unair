<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class RoleBasedAccessTest extends TestCase
{
    use RefreshDatabase;

    protected $adminUser;
    protected $boendUser;
    protected $regularUser;

    protected function setUp(): void
    {
        parent::setUp();

        // Create test users with different roles
        $this->adminUser = User::create([
            'name' => 'Test Admin',
            'email' => 'admin@test.com',
            'password' => Hash::make('password'),
            'role' => 'admin'
        ]);

        $this->boendUser = User::create([
            'name' => 'Test BOEND',
            'email' => 'boend@test.com',
            'password' => Hash::make('password'),
            'role' => 'boend'
        ]);

        $this->regularUser = User::create([
            'name' => 'Test User',
            'email' => 'user@test.com',
            'password' => Hash::make('password'),
            'role' => 'user'
        ]);
    }

    /** @test */
    public function admin_can_access_dashboard()
    {
        $response = $this->actingAs($this->adminUser)
                         ->get(route('admin.dashboard'));

        $response->assertStatus(200);
    }

    /** @test */
    public function boend_can_access_dashboard()
    {
        $response = $this->actingAs($this->boendUser)
                         ->get(route('admin.dashboard'));

        $response->assertStatus(200);
    }

    /** @test */
    public function regular_user_cannot_access_dashboard()
    {
        $response = $this->actingAs($this->regularUser)
                         ->get(route('admin.dashboard'));

        $response->assertStatus(403);
    }

    /** @test */
    public function admin_can_access_user_management()
    {
        $response = $this->actingAs($this->adminUser)
                         ->get(route('admin.user.index'));

        $response->assertStatus(200);
    }

    /** @test */
    public function boend_cannot_access_user_management()
    {
        $response = $this->actingAs($this->boendUser)
                         ->get(route('admin.user.index'));

        $response->assertStatus(403);
    }

    /** @test */
    public function admin_can_access_events()
    {
        $response = $this->actingAs($this->adminUser)
                         ->get(route('admin.events.index'));

        $response->assertStatus(200);
    }

    /** @test */
    public function boend_can_access_events()
    {
        $response = $this->actingAs($this->boendUser)
                         ->get(route('admin.events.index'));

        $response->assertStatus(200);
    }

    /** @test */
    public function admin_can_access_blog()
    {
        $response = $this->actingAs($this->adminUser)
                         ->get(route('admin.blog.index'));

        $response->assertStatus(200);
    }

    /** @test */
    public function boend_can_access_blog()
    {
        $response = $this->actingAs($this->boendUser)
                         ->get(route('admin.blog.index'));

        $response->assertStatus(200);
    }

    /** @test */
    public function admin_can_access_merchandise()
    {
        $response = $this->actingAs($this->adminUser)
                         ->get(route('admin.merchandise.index'));

        $response->assertStatus(200);
    }

    /** @test */
    public function boend_can_access_merchandise()
    {
        $response = $this->actingAs($this->boendUser)
                         ->get(route('admin.merchandise.index'));

        $response->assertStatus(200);
    }

    /** @test */
    public function admin_can_access_projects()
    {
        $response = $this->actingAs($this->adminUser)
                         ->get(route('admin.projects.index'));

        $response->assertStatus(200);
    }

    /** @test */
    public function boend_can_access_projects()
    {
        $response = $this->actingAs($this->boendUser)
                         ->get(route('admin.projects.index'));

        $response->assertStatus(200);
    }

    /** @test */
    public function user_model_helper_methods_work_correctly()
    {
        // Test admin methods
        $this->assertTrue($this->adminUser->isAdmin());
        $this->assertTrue($this->adminUser->hasAdminAccess());
        $this->assertTrue($this->adminUser->canManageUsers());
        $this->assertFalse($this->adminUser->isBoend());

        // Test boend methods
        $this->assertFalse($this->boendUser->isAdmin());
        $this->assertTrue($this->boendUser->hasAdminAccess());
        $this->assertFalse($this->boendUser->canManageUsers());
        $this->assertTrue($this->boendUser->isBoend());

        // Test regular user methods
        $this->assertFalse($this->regularUser->isAdmin());
        $this->assertFalse($this->regularUser->hasAdminAccess());
        $this->assertFalse($this->regularUser->canManageUsers());
        $this->assertFalse($this->regularUser->isBoend());
    }

    /** @test */
    public function unauthenticated_users_cannot_access_admin_panel()
    {
        $response = $this->get(route('admin.dashboard'));
        $response->assertRedirect(route('login.form'));

        $response = $this->get(route('admin.events.index'));
        $response->assertRedirect(route('login.form'));

        $response = $this->get(route('admin.user.index'));
        $response->assertRedirect(route('login.form'));
    }

    /** @test */
    public function admin_test_route_works_for_admin_and_boend()
    {
        // Test admin access
        $response = $this->actingAs($this->adminUser)->get('/admin-test');
        $response->assertStatus(200);
        $response->assertSeeText('Admin Masuk');

        // Test boend access
        $response = $this->actingAs($this->boendUser)->get('/admin-test');
        $response->assertStatus(200);
        $response->assertSeeText('Admin Masuk');

        // Test regular user access
        $response = $this->actingAs($this->regularUser)->get('/admin-test');
        $response->assertStatus(403);
    }
}