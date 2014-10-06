<?php namespace Acme\Html;

use Illuminate\Html\FormBuilder as IlluminateFormBuilder;

class FormBuilder
  extends IlluminateFormBuilder {

  public function errors_for( $attribute, $transleted, $errors )
  {

    $error = $errors->first(
      $attribute,
      '<span class="error">:message</span>'
    );

    $error = str_replace(
      str_replace( '_', ' ', $attribute ),
      '<b>' . $transleted . '</b>',
      $error
    );

    return $error;
  }

  public function label_for( $label, $ajuda = '' )
  {

    $options = [
      'class'          => 'label icon-question',
      'data-toggle'    => "hover",
      'rel'            => "popover",
      'data-placement' => "right",
      'title'          => '',
      'data-content'   => $ajuda
    ];

    $name = str_replace( ' ', '_', $label );

    $label = ' ' . $label . ':';

    return $this->label( $name, $label, $options );
  }

  public function select_field( $name, $value = [], $oldValue )
  {
    $options = [
      'class' => 'form-control',
      'id'    => $name
    ];

    return $this->select( $name, $value, $oldValue, $options );
  }

  public function money_field( $name, $label = '', $value = null )
  {
    return $this->field( 'money', $name, $label, $value );
  }

  public function number_field( $name, $label = '', $value = null )
  {
    return $this->field( 'number', $name, $label, $value );
  }

  public function percent_field( $name, $label = '', $value = null )
  {
    return $this->field( 'percent', $name, $label, $value );
  }

  public function text_field( $name, $label = '', $value = null )
  {
    return $this->field( 'text', $name, $label, $value );
  }

  public function email_field( $name, $label = '', $value = null )
  {
    return $this->field( 'email', $name, $label, $value );
  }

  public function password_field( $name, $label = '', $value = null )
  {
    return $this->field( 'password', $name, $label, $value );
  }

  public function date_field( $name, $label = '', $value = null )
  {
    return $this->field( 'date', $name, $label, $value );
  }

  public function datetime_field( $name, $label = '', $value = null )
  {
    return $this->field( 'date_time', $name, $label, $value );
  }

  public function checkbox_field( $name, $label, $value = null )
  {
    return $this->field( 'checkbox', $name, $label, $value );
  }

  public function radio_field( $name, $label, $value = null )
  {
    return $this->field( 'radio', $name, $label, $value );
  }

  public function textarea_field( $name, $label = '', $value = null,
    $options = [] )
  {
    return $this->field( 'textarea', $name, $label, $value, $options );
  }

  public function submit_button( $name, $label, $value = null )
  {
    return $this->field( 'submit', $name, $label, $value );
  }

  public function save_button( $name, $label, $value = null )
  {
    return $this->field( 'save', $name, $label, $value );
  }

  public function reset_button( $name, $label, $value = null )
  {
    return $this->field( 'reset', $name, $label, $value );
  }

  public function route_button( $name, $label, $value = null )
  {
    return $this->field( 'route', $name, $label, $value );
  }

  public function exit_button( $name, $label, $value = null )
  {
    return $this->field( 'exit', $name, $label, $value );
  }

  public function create_button( $name, $label, $value = null )
  {
    return $this->field( 'create', $name, $label, $value );
  }

  public function print_button( $name, $label, $value = null )
  {
    return $this->field( 'print', $name, $label, $value );
  }

  public function update_button( $name, $label, $value = null )
  {
    return $this->field( 'update', $name, $label, $value );
  }

  public function delete_button( $name, $label, $value = null )
  {
    return $this->field( 'delete', $name, $label, $value );
  }

  public function search_button( $name, $label, $value = null )
  {
    return $this->field( 'search', $name, $label, $value );
  }

  public function route_link( $name, $label, $value = null )
  {
    return $this->field( 'link', $name, $label, $value );
  }

  private function field( $type, $name, $label, $value, $options = [] )
  {

    if ( $type === 'radio' || $type === 'checkbox' ) {

      $html = '<div class="' . $type . '"><label>';
      $html .= $this->input( $type, $name, $value, $options );
      $html .= $label . '</label></div>';


    } elseif ( $type === 'textarea' ) {
      // ['size' => '50x3']
      if ( ! $options ) {
        $size = '50x5';
      } else {
        $size = $options['size'];
      }

      $options = [
        'class'       => 'form-control',
        'placeholder' => $label,
        'size'        => $size
      ];

      $html = $this->textarea( $name, $value, $options );


    } elseif ( $type === 'date' ) {

      $type    = 'text';
      $options = [
        'placeholder' => $label,
        'class'       => 'form-control date',
      ];

      $html = $this->input( $type, $name, $value, $options );


    } elseif ( $type === 'date_time' ) {

      $type    = 'text';
      $options = [
        'placeholder' => $label,
        'class'       => 'form-control date_time',
      ];

      $html = $this->input( $type, $name, $value, $options );


    } elseif ( $type === 'money' ) {

      $type    = 'text';
      $options = [
        'placeholder' => $label,
        'class'       => 'form-control money',
      ];

      $html = $this->input( $type, $name, $value, $options );


    } elseif ( $type === 'number' ) {

      $type    = 'text';
      $options = [
        'placeholder' => $label,
        'class'       => 'form-control number',
      ];

      $html = $this->input( $type, $name, $value, $options );


    } elseif ( $type === 'percent' ) {

      $type    = 'text';
      $options = [
        'placeholder' => $label,
        'class'       => 'form-control percent',
      ];

      $html = $this->input( $type, $name, $value, $options );

    } elseif ( $type === 'submit' ) {

      $options = ['class' => 'btn btn-success btn-xs'];
      $value   = $label;

      $html = $this->input( $type, $name, $value, $options );

    } elseif ( $type === 'reset' ) {

      $options = ['class' => 'btn btn-primary btn-xs'];
      $value   = $label;

      $html = $this->input( $type, $name, $value, $options );

    } elseif ( $type === 'route' ) {

      $options = ['class' => 'btn btn-primary btn-xs'];

      $html = app( 'html' )->linkRoute(
        $name,
        $label,
        $parameters = [$value],
        $options
      );

    } elseif ( $type === 'exit' ) {

      $options = ['class' => 'btn btn-success btn-xs fa-input'];

      $html = app( 'html' )->linkRoute(
        $name,
        $label,
        $parameters = [$value],
        $options
      );

    } elseif ( $type === 'create' ) {

      $options = [
        'class' => 'btn btn-success btn-xs fa-input'
      ];

      $html = app( 'html' )->linkRoute(
        $name,
        $label,
        $parameters = [$value],
        $options
      );

    } elseif ( $type === 'print' ) {

      $options = [
        'target' => '_blank',
        'class'  => 'btn btn-success btn-xs fa-input'
      ];

      $html = app( 'html' )->linkRoute(
        $name,
        $label,
        $parameters = [$value],
        $options
      );

    } elseif ( $type === 'search' ) {

      $options = [
        'class' => 'btn btn-success btn-xs fa-input',
        'id' => 'search_button'
      ];
      $value   = $label;

      $html = $this->input( 'button', $name, $value, $options );

    } elseif ( $type === 'save' ) {

      $options = ['class' => 'btn btn-success btn-xs fa-input'];
      $value   = $label;

      $html = $this->input( 'submit', $name, $value, $options );

    } elseif ( $type === 'delete' ) {

      $options = [
        'class'       => 'btn btn-success btn-xs fa-input',
        'data-method' => 'delete'
      ];

      $html = app( 'html' )->linkRoute(
        $name,
        $label,
        $parameters = [$value],
        $options
      );

    } elseif ( $type === 'link' ) {

      $options = [
        'method' => 'GET',
        'class'  => 'align-center'
      ];

      $html = app( 'html' )->linkRoute(
        $name,
        $label,
        $parameters = [$value],
        $options
      );

    } else {

      $options = [
        'placeholder' => $label,
        'class'       => 'form-control',
      ];

      $html = $this->input( $type, $name, $value, $options );
    }

    return $html;
  }


// Example of call
//  {{ Form::table(['username', 'email'],
//          User::all(),
//          'users') }}

  public function table(
    $resource,
    $titles = [],
    $fields = [],
    $data = []
  ) {

    $table
      = '<table class="table-bg table table-condensed table-hover table-striped">';

    $table .= '<thead class="navbar-bg navbar-color" >';
    $table .= '<tr>';

    foreach ( $titles as $title ) {
      $table .= '<th>' . ($title) . '</th>';
    }

    $table .= '</tr>';
    $table .= '</thead>';

    $table .= '<tbody>';

    foreach ( $data as $d ) {
      $table .= '<tr>';

      foreach ( $fields as $key ) {
        $table .= '<td>' . $d->$key . '</td>';
      }

      $table .= '</tr>';
    }

    $table .= '</tbody>';

    $table .= '</table>';

    return $table;
  }


  public function breadcrumb( $options = [] )
  {

    $count = count( $options );

    $html = '<ol class="breadcrumb pull-right">';
    $html .= '<li> Menu Principal </li>';

    for ( $i = 0; $i < $count; $i++ ) {

      $html .= '<li>' . $options[$i] . ' </li>';
    }

    $html .= '</ol>';

    $html .= '<h1 class="page-header">';
    $html .= $options[0];
    $html .= '</h1>';

    return $html;
  }


}