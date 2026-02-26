public function render() {
    return view('livewire.admin.roles-index', [
        'roles' => \Spatie\Permission\Models\Role::all()
    ]);
}
