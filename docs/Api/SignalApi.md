# NookeST\Camunda\SignalApi

All URIs are relative to http://localhost:8080/engine-rest.

Method | HTTP request | Description
------------- | ------------- | -------------
[**throwSignal()**](SignalApi.md#throwSignal) | **POST** /signal | Event


## `throwSignal()`

```php
throwSignal($signal_dto)
```

Event

A signal is an event of global scope (broadcast semantics) and is delivered to all active handlers. Internally this maps to the engine's signal event received builder method `RuntimeService#createSignalEvent()`. For more information about the signal behavior, see the [Signal Events](https://docs.camunda.org/manual/7.15/reference/bpmn20/events/signal-events/) section of the [BPMN 2.0 Implementation Reference](https://docs.camunda.org/manual/7.15/reference/bpmn20/).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NookeST\Camunda\Api\SignalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$signal_dto = {"name":"policy_conditions_changed","variables":{"newTimePeriodInMonth":{"value":24}}}; // \NookeST\Camunda\Model\SignalDto

try {
    $apiInstance->throwSignal($signal_dto);
} catch (Exception $e) {
    echo 'Exception when calling SignalApi->throwSignal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signal_dto** | [**\NookeST\Camunda\Model\SignalDto**](../Model/SignalDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
