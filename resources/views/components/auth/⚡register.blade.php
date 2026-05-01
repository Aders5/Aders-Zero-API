<?php

use App\Models\User;
use function Livewire\Volt\{state, rules};
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

state(['name' => '', 'email' => '', 'password' => '', 'password_confirmation' => '']);

rules(['name' => 'required', 'email' => 'required|email|unique:users', 'password' => 'required|min:8|confirmed']);

$register = function () {
    $this->validate();

    $user = User::create([
        'name' => $this->name,
        'email' => $this->email,
        'password' => Hash::make($this->password),
    ]);

    
    event(new Registered($user));

    Auth::login($user);

    return redirect()->route('verification.notice');
};

?>

<div>
    <form wire:submit="register">
        <input type="text" wire:model="name" placeholder="Nombre">
        <input type="email" wire:model="email" placeholder="Email">
        <input type="password" wire:model="password" placeholder="Password">
        <input type="password" wire:model="password_confirmation" placeholder="Confirmar">
        
        <button type="submit">Registrar en Aders-Zero</button>
    </form>
</div>