<?php

namespace App\Repository\Blocks;

use Illuminate\Support\Facades\DB;
use App\Repository\AbstractRepository;
use App\Models\Article;

class ArticleRepository extends AbstractRepository
{
    /**
     * @param int $data
     * @param int $perPage
     * @param int $relation
     *
     * @return $article
     */
    public function getAll($data,$category_id=null,$perPage=false,$relation = false)
    {
        $article = DB::table('tickets')
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

        return $article;
    }
    /**
     * @param int $id
     * @param int $type
     *
     * @return $article
     */
    public function getById($id,$category_id=null)
    {
        $article = DB::table('tickets')
            ->where('id', $id)
            ->when(isset($category_id), function ($query) use ($category_id) {
                return $query->where('category_id', $category_id);
            })
            ->first();

        return $article;
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
     * @return $article
     */
    public function createarticle($category_id,$requestData)
    {
        $article = DB::table('tickets')->insertGetId([
	        'title' => $requestData['title'],
	        'text' => $requestData['text'],
	        'public' => $requestData['public'],
	        'category_id' => $category_id
	        'order' => DB::raw('sort+1'),
        ]);
        
        return $article;
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
     * @return $article
     */
    public function update($id,$category_id,$requestData)
    {
        $article = DB::table('tickets')
        ->where(['id' => $id])
        ->update([
	        'title' => $requestData['title'],
	        'text' => $requestData['text'],
	        'public' => $requestData['public'],
	        'category_id' => $category_id
        ]);
        return $article;
    }
    /**
     * @param int $value
     * @param int $key
     *
     * @return $article
     */
    public function updateSort($id,$sort)
    {
        $article = DB::table('tickets')
            ->where(['id' => $id])
            ->update(['order' => $sort]);
        return $article;
    }
    /**
     * @param int $id
     *
     * @return $article
     */
    public function trigger($id)
    {
        $article = $this->getById($id);
        $article->update([
            'public' => ($article->public != false)
        ]);
        return $article;

    }
    /**
     * @param int $company_id
     * @param int $url
     *
     * @return $article
     */
    public function delete($id,$company_id=null,$url=null)
    {
        $article = DB::table('tickets')
                    ->where('id', $id)
                    ->delete();
        return $article;
    }



