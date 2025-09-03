<?php

namespace Plugin\Saas\Http\Controllers\Admin;

use Exception;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Plugin\Saas\Models\DatabaseCredential;

class DatabaseCredentialController extends Controller
{
    /**
     * Display a listing of database credentials
     */
    public function index(Request $request): View
    {
        $credentials = DatabaseCredential::orderBy('created_at', 'desc')->paginate(10);

        return view('plugin/saas::admin.database-credentials.index', compact('credentials'));
    }

    /**
     * Show the form for creating a new database credential
     */
    public function create(): View
    {
        return view('plugin/saas::admin.database-credentials.create');
    }

    /**
     * Store a newly created database credential
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'db_name' => 'required|string|max:255',
            'db_user' => 'required|string|max:255',
            'db_password' => 'required|string|max:255',
        ]);

        try {
            DB::beginTransaction();

            DatabaseCredential::create([
                'db_name' => $request->db_name,
                'db_user' => $request->db_user,
                'db_password' => $request->db_password,
                'is_active' => false
            ]);

            DB::commit();
            toastNotification('success', translate('Database credential created successfully!'));
            return redirect()->route('plugin.saas.database-credentials.index');
        } catch (Exception $ex) {
            DB::rollBack();
            toastNotification('error', translate('Unable to create database credential!'));
            return back()->withInput();
        }
    }

    /**
     * Display the specified database credential
     */
    public function show(DatabaseCredential $databaseCredential): View
    {
        return view('plugin/saas::admin.database-credentials.show', compact('databaseCredential'));
    }

    /**
     * Show the form for editing the specified database credential
     */
    public function edit(DatabaseCredential $databaseCredential): View
    {
        return view('plugin/saas::admin.database-credentials.edit', compact('databaseCredential'));
    }

    /**
     * Update the specified database credential
     */
    public function update(Request $request, DatabaseCredential $databaseCredential): RedirectResponse
    {
        $request->validate([
            'db_name' => 'required|string|max:255',
            'db_user' => 'required|string|max:255',
            'db_password' => 'required|string|max:255',
        ]);

        try {
            DB::beginTransaction();

            $databaseCredential->update([
                'db_name' => $request->db_name,
                'db_user' => $request->db_user,
                'db_password' => $request->db_password,
                'is_active' => false
            ]);

            DB::commit();
            toastNotification('success', translate('Database credential updated successfully!'));
            return redirect()->route('plugin.saas.database-credentials.index');
        } catch (Exception $ex) {
            DB::rollBack();
            toastNotification('error', translate('Unable to update database credential!'));
            return back()->withInput();
        }
    }

    /**
     * Remove the specified database credential
     */
    public function destroy(DatabaseCredential $databaseCredential): RedirectResponse
    {
        try {
            DB::beginTransaction();

            $databaseCredential->delete();

            DB::commit();
            toastNotification('success', translate('Database credential deleted successfully!'));
            return redirect()->route('plugin.saas.database-credentials.index');
        } catch (Exception $ex) {
            DB::rollBack();
            toastNotification('error', translate('Unable to delete database credential!'));
            return back();
        }
    }
}
