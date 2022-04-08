<?php

namespace g4t\Sas3\Classes;

trait Manager
{



    public function managers()
    {
        $count = $this->paginate == true ? 10 : 100000000;
        $managers = $this->post($this->managers_list, [
            "count" => $count,
            "page" => $this->page,
            "search" => $this->search,
            "showsub" => $this->showsub
        ]);
        if ($this->paginate == true) {
            $managers['page'] = $this->page;
            $last_page = $managers['total'] / 10;
            $managers['last_page'] = is_float($last_page) ? (int)$last_page + 1 : $last_page;
        }
        $this->function = 'managers';
        if ($this->run) {
            return $managers;
        }
        return $this;
    }


    public function manager($manager_id)
    {
        try {
            return $this->post($this->single_manager, ['id' => $manager_id])[0];
        } catch (\Throwable $th) {
            abort(404);
        }
    }

    public function addManager($data)
    {
        return $this->post($this->add_manager, $data);
    }


    public function deleteManagers($managers)
    {
        $ids = [
            'ids' => $managers
        ];
        return $this->post($this->delete_managers, $ids);
    }


    public function updateManager($data)
    {
        return $this->post($this->update_managers, $data);
    }
}
