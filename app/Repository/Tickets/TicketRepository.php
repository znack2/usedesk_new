<?php

namespace App\Repository\Blocks;

use Illuminate\Support\Facades\DB;
use App\Repository\AbstractRepository;
use App\Models\Ticket;

class TicketRepository extends AbstractRepository
{
    /**
     * @param int $data
     * @param int $perPage
     * @param int $relation
     *
     * @return $ticket
     */
    public function getAll($data,$category_id=null,$perPage=false,$relation = false)
    {
        $ticket = DB::table('uh_tickets')
            ->when($relation, function ($query) use ($relation) {
                return $query->load($relation);
            })
            ->when(isset($data['keyword']), function ($query) use ($data) {
                return $query->where('title', 'LIKE', "%".$data['keyword']."%")
            })
            ->when(isset($data['public']), function ($query) use ($data) {
                return $query->where('public', $data['public']);
            })
            ->when(isset($data['id']), function ($query) use ($data) {
                return $query->where('id', $data['id']);
            })
            ->when(isset($category_id), function ($query) use ($data) {
                return $query->where('category_id', $data['category_id']);
            })

            ->when(isset($data['orderBy']), function ($query) use ($data) {
                return $query->orderBy($data['orderBy']);
            })//->select('company_id','name','title','url','text')
              ->orderBy('order')
              ->paginate($perPage);

        return $ticket;
    }
    /**
     * @param int $id
     * @param int $type
     *
     * @return $ticket
     */
    public function getById($id,$category_id=null)
    {
        $ticket = DB::table('uh_tickets')
            ->where('id', $id)
            ->when(isset($category_id), function ($query) use ($category_id) {
                return $query->where('category_id', $category_id);
            })
            ->first();

        return $ticket;
    }
    /**
     * @param int $name
     * @param int $title
     * @param int $type
     * @param int $company_id
     * @param int $url
     * @param int $active
     * @param int $sort
     *
     * @return $ticket
     */
    public function createticket($status_id,$client_id,$assignee_id,$email_channel_id,$company_id,$requestData)
    {
        $ticket = DB::table('uh_tickets')->insertGetId([
            'status_id' => $status_id
            'client_id' => $client_id
            'assignee_id' => $assignee_id
            'email_channel_id' => $email_channel_id
            'company_id' => $company_id
            'subject' => $requestData['subject'],
            'email_channel_email' => $requestData['email_channel_email'],
            'email_channel_subject' => $requestData['email_channel_subject'],
            'email_channel_subject' => $requestData['email_channel_subject'],
            'notification_email' => $requestData['notification_email'],
            'spam_score' => $requestData['spam_score'],
            'nps_sent' => $requestData['nps_sent'],
            'contact' => $requestData['contact'],
            'group' => $requestData['group'],
            
            'type' => $type,
            'priority' => $priority,
            'channel' => $channel,

            'status_updated_at' => 
            'last_updated_at' => 
            'last_viewed_at' => 
            'published_at' => 


        // 'social_id' => $faker->word,
        // 'zendesk_id' => $faker->word,
        // 'owner_id' => $faker->randomNumber(),
        // 'additional_id' => $faker->word,
        // 'telephony_id' => $faker->word,

        ]);
        
        return $ticket;
    }

    /**
     * @param int $name
     * @param int $title
     * @param int $type
     * @param int $company_id
     * @param int $url
     * @param int $active
     * @param int $sort
     *
     * @return $ticket
     */
    public function update($id,$category_id,$requestData)
    {
        $ticket = DB::table('uh_tickets')
        ->where(['id' => $id])
        ->update([
	        'title' => $requestData['title'],
	        'text' => $requestData['text'],
	        'public' => $requestData['public'],
	        'category_id' => $category_id
        ]);
        return $ticket;
    }
    /**
     * @param int $value
     * @param int $key
     *
     * @return $ticket
     */
    public function updateSort($id,$sort)
    {
        $ticket = DB::table('uh_tickets')
            ->where(['id' => $id])
            ->update(['order' => $sort]);
        return $ticket;
    }
    /**
     * @param int $id
     *
     * @return $ticket
     */
    public function trigger($id)
    {
        $ticket = $this->getById($id);
        $ticket->update([
            'public' => ($ticket->public != false)
        ]);
        return $ticket;

    }
    /**
     * @param int $company_id
     * @param int $url
     *
     * @return $ticket
     */
    public function delete($id,$company_id=null,$url=null)
    {
        $ticket = DB::table('uh_tickets')
                    ->where('id', $id)
                    ->delete();
        return $ticket;
    }



