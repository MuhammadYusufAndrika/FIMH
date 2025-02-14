    <?php

    use App\Models\VisiMisi;
    use Illuminate\Support\Facades\Route;
    use Illuminate\Support\Facades\DB;  
    use Illuminate\Support\ServiceProvider;

    class AppServiceProvider extends ServiceProvider
    {
        public function boot()
        {
            // Bind model manual untuk visimisi
        }
    }
