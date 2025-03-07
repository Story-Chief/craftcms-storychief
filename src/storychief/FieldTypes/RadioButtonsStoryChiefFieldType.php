<?php namespace storychief\storychiefv3\storychief\FieldTypes;

use craft\base\Field;

class RadioButtonsStoryChiefFieldType implements StoryChiefFieldTypeInterface
{
    public function supportedStorychiefFieldTypes(): array
    {
        return [
            'radio',
        ];
    }

    public function prepFieldData(Field $field, $fieldData): ?string
    {
        $preppedData = null;

        if (empty($fieldData)) {
            return null;
        }

        $options = $field->options;

        foreach ($options as $option) {
            if ($fieldData == $option['value']) {
                $preppedData = $option['value'];
                break;
            }
        }

        return $preppedData;
    }
}
