<?php
  
  namespace Drupal\video\Plugin\Field\FieldWidget;
  
  use Drupal;
  use Drupal\Core\Field\FieldItemListInterface;
  use Drupal\Core\Field\WidgetBase;
  use Drupal\Core\Form\FormStateInterface;
  
  /**
   * Plugin implementation of the 'VideoDefaultWidget' widget.
   *
   * @FieldWidget(
   *   id = "VideoDefaultWidget",
   *   label = @Translation("Video select"),
   *   field_types = {
   *     "Video"
   *   }
   * )
   */
  class VideoDefaultWidget extends WidgetBase {
    
    /**
     * Define the form for the field type.
     *
     * Inside this method we can define the form used to edit the field type.
     *
     * Here there is a list of allowed element types: https://goo.gl/XVd4tA
     */
    public function formElement (
      FieldItemListInterface $items,
      $delta,
      Array $element,
      Array &$form,
      FormStateInterface $formState
    ) {
      
      $element['url'] = [
        '#type' => 'textfield',
        '#title' => t('Video URL'),
        '#default_value' => isset($items[$delta]->url) ? $items[$delta]->url : null,
        '#empty_value' => '',
        '#placeholder' => t('Video URL'),
      ];
      
      
      return $element;
    }
    
  }
