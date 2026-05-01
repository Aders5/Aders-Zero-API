<x-layouts::auth :title="__('Verifica tu correo')">
    <div class="mt-4 flex flex-col gap-6">
        <div class="text-sm text-zinc-600 dark:text-zinc-400">
            {{ __('Gracias por registrarte. Por favor, verifica tu correo haciendo clic en el enlace que enviamos. Si no llegó, podemos enviarte otro.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="text-sm font-medium text-green-600">
                {{ __('Se ha enviado un nuevo enlace de verificación.') }}
            </div>
        @endif

        <div class="flex items-center justify-between mt-4">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <flux:button type="submit" variant="primary">
                    {{ __('Reenviar correo') }}
                </flux:button>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <flux:button type="submit" variant="ghost">
                    {{ __('Cerrar sesión') }}
                </flux:button>
            </form>
        </div>
    </div>
</x-layouts::auth>