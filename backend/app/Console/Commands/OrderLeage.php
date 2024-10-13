<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Components\BetsAPI;
use App\Models\League;
use App\Models\Bet;
use App\Models\User;

class OrderLeage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'order:league';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run order League';

    // protected $one_ids = [94, 207];
    // protected $two_cc = ['eu', 207];
    protected $conditions = [
        ['ids' => [94], 'cc' => [], 'order' => 1], //
        ['ids' => [207, 123, 99, 199], 'cc' => [], 'order' => 2], //
        ['ids' => [2481, 901, 1259, 207, 425], 'cc' => [], 'order' => 3], //FA, Scotland-Premiership, England-EFL-Cup, Spain-Primera-Liga, Spain-Copa-del-Rey
        ['ids' => [], 'cc' => ['eu'], 'order' => 4],
        ['ids' => [], 'cc' => ['gb','es', 'de', 'fr', 'it'], 'order' => 5], // eng, span, duc, phap, y
        ['ids' => [], 'cc' => ['vn'], 'order' => 6],
    ];


    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $supers = Bet::get();
        foreach ($supers as $key => $value) {
            $user = User::find($value->user_id);
            $value->updateParent($user);
            $value->finished_at = $value->updated_at;
            $value->save();
        }

        $this->info('DONE!');
    }

    public function saveLeages($list) {
        foreach ($list as $item) {
            $item->order = $this->getOrder($item);
            if ($item->order < 1000) {
                $this->info($item->order.' '.$item->name);
            }

            $item->save();
        }
    }

    public function getOrder($item) {
        foreach ($this->conditions as $value) {
            if (in_array($item->league_id, $value['ids']) || in_array($item->cc, $value['cc'])) {
                return $value['order'];
            }
        }
        return 1000;
    }
}
