<?php namespace Acme\Repositorio;

abstract class PadraoRepository {

  /**
   * Eloquent model
   */
  protected $model;
  /**
   * Quantidade minima de registros
   */
  const MIN_REGS = 15;

  /**
   * Get select Options
   *
   * @return array
   */
  public function getPerPage()
  {
    $page = [
      15  => 'Exibir 15 registros',
      50  => 'Exibir 50 registros',
      100 => 'Exibir 100 registros',
      500 => 'Exibir 500 registros',
    ];

    return $page;
  }

  /**
   * Get users paginated
   *
   * @param int $howMany
   *
   * @return mixed
   */
  public function getPaginatedBy( $orderBy, $showMany, $searchFilters = [] )
  {
    if ( $searchFilters ) {
      $result = null;

      foreach ( $searchFilters as $field => $value ) {

        $result = $this->model
          ->where( $field, 'LIKE', '%' . $field . '%' )->get();
      }

      $result = $result->orderBy( $orderBy )->paginate(
        $showMany < self::MIN_REGS ? self::MIN_REGS : $showMany
      );

      return $result;
    }

    return $this->model
      ->orderBy( $orderBy )
      ->paginate(
        $showMany < self::MIN_REGS ? self::MIN_REGS : $showMany
      );
  }

  /**
   * Get all users
   *
   * @param int $howMany
   *
   * @return mixed
   */
  public function getAllby( $orderBy )
  {
    return $this->model->orderBy( $orderBy )->get();
  }

  /**
   * Get users by id
   *
   * @param $userId
   *
   * @return mixed
   */
  public function getById( $id )
  {
    return $this->model->findOrFail( $id );
  }

  /**
   * Create new users
   *
   * @param User $user
   *
   * @return mixed
   */
  public function create( $input = [] )
  {
    return $this->model->create( $input );
  }

  /**
   * Update users by id
   *
   * @param int  $userId
   * @param User $user
   *
   * @return mixed
   */
  public function update( $id, $input = [] )
  {
    return $this->model->findOrFail( $id )->update( $input );
  }

  /**
   * Delete users by id
   *
   * @param $userId
   *
   * @return mixed
   */
  public function delete( $id )
  {
    return $this->model->destroy( $id );
  }

}