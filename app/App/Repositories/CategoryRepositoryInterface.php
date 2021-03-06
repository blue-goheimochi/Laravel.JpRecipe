<?php
namespace App\Repositories;

/**
 * Interface CategoryRepositoryInterface
 * @package App\Repositories
 */
interface CategoryRepositoryInterface
{

    /**
     *
     * @param array $attribute
     * @return mixed
     */
    public function addCategory(array $attribute);

    /**
     * @param $id
     * @param array $attribute
     * @return mixed
     */
    public function updateCategory($id, array $attribute);

    /**
     * @return array|static[]
     */
    public function getCategories();

    /**
     * @param $column
     * @param $key
     * @return \Illuminate\Database\Query\Builder|mixed|static
     */
    public function getCategoryList($column, $key);

    /**
     * @param $sectionId
     * @return array|static[]
     */
    public function getCategoryFromSection($sectionId);

    /**
     * @param $id
     * @return mixed
     */
    public function getCategory($id);

    /**
     * @param $slug
     * @return mixed
     */
    public function getCategoryFromSlug($slug);

    /**
     * @return mixed
     */
    public function getNavigationCategory();
}