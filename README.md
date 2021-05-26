# OpenAPIClient-php

OpenApi Spec for Camunda Platform REST API.


## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/nookest/camunda-client.git"
    }
  ],
  "require": {
    "nookest/camunda-client": "7.15.0"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new NookeST\Camunda\Api\BatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the batch to be deleted.
$cascade = True; // bool | `true`, if the historic batch and historic job logs for this batch should also be deleted.

try {
    $apiInstance->deleteBatch($id, $cascade);
} catch (Exception $e) {
    echo 'Exception when calling BatchApi->deleteBatch: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *http://localhost:8080/engine-rest*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BatchApi* | [**deleteBatch**](docs/Api/BatchApi.md#deletebatch) | **DELETE** /batch/{id} | Delete
*BatchApi* | [**getBatch**](docs/Api/BatchApi.md#getbatch) | **GET** /batch/{id} | Get
*BatchApi* | [**getBatchStatistics**](docs/Api/BatchApi.md#getbatchstatistics) | **GET** /batch/statistics | Get Statistics
*BatchApi* | [**getBatchStatisticsCount**](docs/Api/BatchApi.md#getbatchstatisticscount) | **GET** /batch/statistics/count | Get Statistics Count
*BatchApi* | [**getBatches**](docs/Api/BatchApi.md#getbatches) | **GET** /batch | Get List
*BatchApi* | [**getBatchesCount**](docs/Api/BatchApi.md#getbatchescount) | **GET** /batch/count | Get List Count
*BatchApi* | [**updateBatchSuspensionState**](docs/Api/BatchApi.md#updatebatchsuspensionstate) | **PUT** /batch/{id}/suspended | Activate/Suspend
*ConditionApi* | [**evaluateCondition**](docs/Api/ConditionApi.md#evaluatecondition) | **POST** /condition | Evaluate
*DecisionDefinitionApi* | [**evaluateDecisionById**](docs/Api/DecisionDefinitionApi.md#evaluatedecisionbyid) | **POST** /decision-definition/{id}/evaluate | Evaluate By Id
*DecisionDefinitionApi* | [**evaluateDecisionByKey**](docs/Api/DecisionDefinitionApi.md#evaluatedecisionbykey) | **POST** /decision-definition/key/{key}/evaluate | Evaluate By Key
*DecisionDefinitionApi* | [**evaluateDecisionByKeyAndTenant**](docs/Api/DecisionDefinitionApi.md#evaluatedecisionbykeyandtenant) | **POST** /decision-definition/key/{key}/tenant-id/{tenant-id}/evaluate | Evaluate By Key And Tenant
*DecisionDefinitionApi* | [**getDecisionDefinitionById**](docs/Api/DecisionDefinitionApi.md#getdecisiondefinitionbyid) | **GET** /decision-definition/{id} | Get Decision Definition By Id
*DecisionDefinitionApi* | [**getDecisionDefinitionByKey**](docs/Api/DecisionDefinitionApi.md#getdecisiondefinitionbykey) | **GET** /decision-definition/key/{key} | Get Decision Definition By Key
*DecisionDefinitionApi* | [**getDecisionDefinitionByKeyAndTenantId**](docs/Api/DecisionDefinitionApi.md#getdecisiondefinitionbykeyandtenantid) | **GET** /decision-definition/key/{key}/tenant-id/{tenant-id} | Get Decision Definition By Key And Tenant Id
*DecisionDefinitionApi* | [**getDecisionDefinitionDiagram**](docs/Api/DecisionDefinitionApi.md#getdecisiondefinitiondiagram) | **GET** /decision-definition/{id}/diagram | Get Diagram
*DecisionDefinitionApi* | [**getDecisionDefinitionDiagramByKey**](docs/Api/DecisionDefinitionApi.md#getdecisiondefinitiondiagrambykey) | **GET** /decision-definition/key/{key}/diagram | Get Diagram By Key
*DecisionDefinitionApi* | [**getDecisionDefinitionDiagramByKeyAndTenant**](docs/Api/DecisionDefinitionApi.md#getdecisiondefinitiondiagrambykeyandtenant) | **GET** /decision-definition/key/{key}/tenant-id/{tenant-id}/diagram | Get Diagram By Key And Tenant
*DecisionDefinitionApi* | [**getDecisionDefinitionDmnXmlById**](docs/Api/DecisionDefinitionApi.md#getdecisiondefinitiondmnxmlbyid) | **GET** /decision-definition/{id}/xml | Get XML By Id
*DecisionDefinitionApi* | [**getDecisionDefinitionDmnXmlByKey**](docs/Api/DecisionDefinitionApi.md#getdecisiondefinitiondmnxmlbykey) | **GET** /decision-definition/key/{key}/xml | Get XML By Key
*DecisionDefinitionApi* | [**getDecisionDefinitionDmnXmlByKeyAndTenant**](docs/Api/DecisionDefinitionApi.md#getdecisiondefinitiondmnxmlbykeyandtenant) | **GET** /decision-definition/key/{key}/tenant-id/{tenant-id}/xml | Get XML By Key and Tenant
*DecisionDefinitionApi* | [**getDecisionDefinitions**](docs/Api/DecisionDefinitionApi.md#getdecisiondefinitions) | **GET** /decision-definition | Get List
*DecisionDefinitionApi* | [**getDecisionDefinitionsCount**](docs/Api/DecisionDefinitionApi.md#getdecisiondefinitionscount) | **GET** /decision-definition/count | Get List Count
*DecisionDefinitionApi* | [**updateHistoryTimeToLiveByDecisionDefinitionId**](docs/Api/DecisionDefinitionApi.md#updatehistorytimetolivebydecisiondefinitionid) | **PUT** /decision-definition/{id}/history-time-to-live | Update History Time to Live
*DecisionDefinitionApi* | [**updateHistoryTimeToLiveByDecisionDefinitionKey**](docs/Api/DecisionDefinitionApi.md#updatehistorytimetolivebydecisiondefinitionkey) | **PUT** /decision-definition/key/{key}/history-time-to-live | Update History Time to Live By Key
*DecisionDefinitionApi* | [**updateHistoryTimeToLiveByDecisionDefinitionKeyAndTenant**](docs/Api/DecisionDefinitionApi.md#updatehistorytimetolivebydecisiondefinitionkeyandtenant) | **PUT** /decision-definition/key/{key}/tenant-id/{tenant-id}/history-time-to-live | Update History Time to Live By Key And Tenant
*DeploymentApi* | [**createDeployment**](docs/Api/DeploymentApi.md#createdeployment) | **POST** /deployment/create | Create
*DeploymentApi* | [**deleteDeployment**](docs/Api/DeploymentApi.md#deletedeployment) | **DELETE** /deployment/{id} | Delete
*DeploymentApi* | [**getDeployment**](docs/Api/DeploymentApi.md#getdeployment) | **GET** /deployment/{id} | Get
*DeploymentApi* | [**getDeploymentResource**](docs/Api/DeploymentApi.md#getdeploymentresource) | **GET** /deployment/{id}/resources/{resourceId} | Get Resource
*DeploymentApi* | [**getDeploymentResourceData**](docs/Api/DeploymentApi.md#getdeploymentresourcedata) | **GET** /deployment/{id}/resources/{resourceId}/data | Get Resource (Binary)
*DeploymentApi* | [**getDeploymentResources**](docs/Api/DeploymentApi.md#getdeploymentresources) | **GET** /deployment/{id}/resources | Get Resources
*DeploymentApi* | [**getDeployments**](docs/Api/DeploymentApi.md#getdeployments) | **GET** /deployment | Get List
*DeploymentApi* | [**getDeploymentsCount**](docs/Api/DeploymentApi.md#getdeploymentscount) | **GET** /deployment/count | Get List Count
*DeploymentApi* | [**redeploy**](docs/Api/DeploymentApi.md#redeploy) | **POST** /deployment/{id}/redeploy | Redeploy
*EngineApi* | [**getProcessEngineNames**](docs/Api/EngineApi.md#getprocessenginenames) | **GET** /engine | Get List
*EventSubscriptionApi* | [**getEventSubscriptions**](docs/Api/EventSubscriptionApi.md#geteventsubscriptions) | **GET** /event-subscription | Get List
*EventSubscriptionApi* | [**getEventSubscriptionsCount**](docs/Api/EventSubscriptionApi.md#geteventsubscriptionscount) | **GET** /event-subscription/count | Get List Count
*ExecutionApi* | [**createIncident**](docs/Api/ExecutionApi.md#createincident) | **POST** /execution/{id}/create-incident | Create Incident
*ExecutionApi* | [**deleteLocalExecutionVariable**](docs/Api/ExecutionApi.md#deletelocalexecutionvariable) | **DELETE** /execution/{id}/localVariables/{varName} | Delete Local Execution Variable
*ExecutionApi* | [**getExecution**](docs/Api/ExecutionApi.md#getexecution) | **GET** /execution/{id} | Get Execution
*ExecutionApi* | [**getExecutions**](docs/Api/ExecutionApi.md#getexecutions) | **GET** /execution | Get Executions
*ExecutionApi* | [**getExecutionsCount**](docs/Api/ExecutionApi.md#getexecutionscount) | **GET** /execution/count | Get Execution Count
*ExecutionApi* | [**getLocalExecutionVariable**](docs/Api/ExecutionApi.md#getlocalexecutionvariable) | **GET** /execution/{id}/localVariables/{varName} | Get Local Execution Variable
*ExecutionApi* | [**getLocalExecutionVariableBinary**](docs/Api/ExecutionApi.md#getlocalexecutionvariablebinary) | **GET** /execution/{id}/localVariables/{varName}/data | Get Local Execution Variable (Binary)
*ExecutionApi* | [**getLocalExecutionVariables**](docs/Api/ExecutionApi.md#getlocalexecutionvariables) | **GET** /execution/{id}/localVariables | Get Local Execution Variables
*ExecutionApi* | [**getMessageEventSubscription**](docs/Api/ExecutionApi.md#getmessageeventsubscription) | **GET** /execution/{id}/messageSubscriptions/{messageName} | Get Message Event Subscription
*ExecutionApi* | [**modifyLocalExecutionVariables**](docs/Api/ExecutionApi.md#modifylocalexecutionvariables) | **POST** /execution/{id}/localVariables | Update/Delete Local Execution Variables
*ExecutionApi* | [**putLocalExecutionVariable**](docs/Api/ExecutionApi.md#putlocalexecutionvariable) | **PUT** /execution/{id}/localVariables/{varName} | Put Local Execution Variable
*ExecutionApi* | [**queryExecutions**](docs/Api/ExecutionApi.md#queryexecutions) | **POST** /execution | Get Executions (POST)
*ExecutionApi* | [**queryExecutionsCount**](docs/Api/ExecutionApi.md#queryexecutionscount) | **POST** /execution/count | Get Execution Count (POST)
*ExecutionApi* | [**setLocalExecutionVariableBinary**](docs/Api/ExecutionApi.md#setlocalexecutionvariablebinary) | **POST** /execution/{id}/localVariables/{varName}/data | Post Local Execution Variable (Binary)
*ExecutionApi* | [**signalExecution**](docs/Api/ExecutionApi.md#signalexecution) | **POST** /execution/{id}/signal | Trigger Execution
*ExecutionApi* | [**triggerEvent**](docs/Api/ExecutionApi.md#triggerevent) | **POST** /execution/{id}/messageSubscriptions/{messageName}/trigger | Trigger Message Event Subscription
*ExternalTaskApi* | [**completeExternalTaskResource**](docs/Api/ExternalTaskApi.md#completeexternaltaskresource) | **POST** /external-task/{id}/complete | Complete
*ExternalTaskApi* | [**extendLock**](docs/Api/ExternalTaskApi.md#extendlock) | **POST** /external-task/{id}/extendLock | Extend Lock
*ExternalTaskApi* | [**fetchAndLock**](docs/Api/ExternalTaskApi.md#fetchandlock) | **POST** /external-task/fetchAndLock | Fetch and Lock
*ExternalTaskApi* | [**getExternalTask**](docs/Api/ExternalTaskApi.md#getexternaltask) | **GET** /external-task/{id} | Get
*ExternalTaskApi* | [**getExternalTaskErrorDetails**](docs/Api/ExternalTaskApi.md#getexternaltaskerrordetails) | **GET** /external-task/{id}/errorDetails | Get Error Details
*ExternalTaskApi* | [**getExternalTasks**](docs/Api/ExternalTaskApi.md#getexternaltasks) | **GET** /external-task | Get List
*ExternalTaskApi* | [**getExternalTasksCount**](docs/Api/ExternalTaskApi.md#getexternaltaskscount) | **GET** /external-task/count | Get List Count
*ExternalTaskApi* | [**getTopicNames**](docs/Api/ExternalTaskApi.md#gettopicnames) | **GET** /external-task/topic-names | Get External Task Topic Names
*ExternalTaskApi* | [**handleExternalTaskBpmnError**](docs/Api/ExternalTaskApi.md#handleexternaltaskbpmnerror) | **POST** /external-task/{id}/bpmnError | Handle BPMN Error
*ExternalTaskApi* | [**handleFailure**](docs/Api/ExternalTaskApi.md#handlefailure) | **POST** /external-task/{id}/failure | Handle Failure
*ExternalTaskApi* | [**lock**](docs/Api/ExternalTaskApi.md#lock) | **POST** /external-task/{id}/lock | 
*ExternalTaskApi* | [**queryExternalTasks**](docs/Api/ExternalTaskApi.md#queryexternaltasks) | **POST** /external-task | Get List (POST)
*ExternalTaskApi* | [**queryExternalTasksCount**](docs/Api/ExternalTaskApi.md#queryexternaltaskscount) | **POST** /external-task/count | Get List Count (POST)
*ExternalTaskApi* | [**setExternalTaskResourcePriority**](docs/Api/ExternalTaskApi.md#setexternaltaskresourcepriority) | **PUT** /external-task/{id}/priority | Set Priority
*ExternalTaskApi* | [**setExternalTaskResourceRetries**](docs/Api/ExternalTaskApi.md#setexternaltaskresourceretries) | **PUT** /external-task/{id}/retries | Set Retries
*ExternalTaskApi* | [**setExternalTaskRetries**](docs/Api/ExternalTaskApi.md#setexternaltaskretries) | **PUT** /external-task/retries | Set Retries Sync
*ExternalTaskApi* | [**setExternalTaskRetriesAsyncOperation**](docs/Api/ExternalTaskApi.md#setexternaltaskretriesasyncoperation) | **POST** /external-task/retries-async | Set Retries Async
*ExternalTaskApi* | [**unlock**](docs/Api/ExternalTaskApi.md#unlock) | **POST** /external-task/{id}/unlock | Unlock
*GroupApi* | [**availableGroupInstanceOperations**](docs/Api/GroupApi.md#availablegroupinstanceoperations) | **OPTIONS** /group/{id} | Group Resource Instance Options
*GroupApi* | [**availableGroupMembersOperations**](docs/Api/GroupApi.md#availablegroupmembersoperations) | **OPTIONS** /group/{id}/members | Group Membership Resource Options
*GroupApi* | [**availableGroupOperations**](docs/Api/GroupApi.md#availablegroupoperations) | **OPTIONS** /group | Group Resource Options
*GroupApi* | [**createGroup**](docs/Api/GroupApi.md#creategroup) | **POST** /group/create | Create Group
*GroupApi* | [**createGroupMember**](docs/Api/GroupApi.md#creategroupmember) | **PUT** /group/{id}/members/{userId} | Create Group Member
*GroupApi* | [**deleteGroup**](docs/Api/GroupApi.md#deletegroup) | **DELETE** /group/{id} | Delete Group
*GroupApi* | [**deleteGroupMember**](docs/Api/GroupApi.md#deletegroupmember) | **DELETE** /group/{id}/members/{userId} | Delete a Group Member
*GroupApi* | [**getGroup**](docs/Api/GroupApi.md#getgroup) | **GET** /group/{id} | Get Group
*GroupApi* | [**getGroupCount**](docs/Api/GroupApi.md#getgroupcount) | **GET** /group/count | Get List Count
*GroupApi* | [**getQueryGroups**](docs/Api/GroupApi.md#getquerygroups) | **GET** /group | Get List
*GroupApi* | [**postQueryGroups**](docs/Api/GroupApi.md#postquerygroups) | **POST** /group | Get List (POST)
*GroupApi* | [**queryGroupCount**](docs/Api/GroupApi.md#querygroupcount) | **POST** /group/count | Get List Count (POST)
*GroupApi* | [**updateGroup**](docs/Api/GroupApi.md#updategroup) | **PUT** /group/{id} | Update Group
*HistoricActivityInstanceApi* | [**getHistoricActivityInstance**](docs/Api/HistoricActivityInstanceApi.md#gethistoricactivityinstance) | **GET** /history/activity-instance/{id} | Get
*HistoricActivityInstanceApi* | [**getHistoricActivityInstances**](docs/Api/HistoricActivityInstanceApi.md#gethistoricactivityinstances) | **GET** /history/activity-instance | Get List
*HistoricActivityInstanceApi* | [**getHistoricActivityInstancesCount**](docs/Api/HistoricActivityInstanceApi.md#gethistoricactivityinstancescount) | **GET** /history/activity-instance/count | Get List Count
*HistoricActivityInstanceApi* | [**queryHistoricActivityInstances**](docs/Api/HistoricActivityInstanceApi.md#queryhistoricactivityinstances) | **POST** /history/activity-instance | Get List (POST)
*HistoricActivityInstanceApi* | [**queryHistoricActivityInstancesCount**](docs/Api/HistoricActivityInstanceApi.md#queryhistoricactivityinstancescount) | **POST** /history/activity-instance/count | Get List Count (POST)
*HistoricProcessInstanceApi* | [**deleteHistoricProcessInstance**](docs/Api/HistoricProcessInstanceApi.md#deletehistoricprocessinstance) | **DELETE** /history/process-instance/{id} | Delete
*HistoricProcessInstanceApi* | [**deleteHistoricProcessInstancesAsync**](docs/Api/HistoricProcessInstanceApi.md#deletehistoricprocessinstancesasync) | **POST** /history/process-instance/delete | Delete Async (POST)
*HistoricProcessInstanceApi* | [**deleteHistoricVariableInstancesOfHistoricProcessInstance**](docs/Api/HistoricProcessInstanceApi.md#deletehistoricvariableinstancesofhistoricprocessinstance) | **DELETE** /history/process-instance/{id}/variable-instances | Delete Variable Instances
*HistoricProcessInstanceApi* | [**getHistoricProcessInstance**](docs/Api/HistoricProcessInstanceApi.md#gethistoricprocessinstance) | **GET** /history/process-instance/{id} | Get
*HistoricProcessInstanceApi* | [**getHistoricProcessInstanceDurationReport**](docs/Api/HistoricProcessInstanceApi.md#gethistoricprocessinstancedurationreport) | **GET** /history/process-instance/report | Get Duration Report
*HistoricProcessInstanceApi* | [**getHistoricProcessInstances**](docs/Api/HistoricProcessInstanceApi.md#gethistoricprocessinstances) | **GET** /history/process-instance | Get List
*HistoricProcessInstanceApi* | [**getHistoricProcessInstancesCount**](docs/Api/HistoricProcessInstanceApi.md#gethistoricprocessinstancescount) | **GET** /history/process-instance/count | Get List Count
*HistoricProcessInstanceApi* | [**queryHistoricProcessInstances**](docs/Api/HistoricProcessInstanceApi.md#queryhistoricprocessinstances) | **POST** /history/process-instance | Get List (POST)
*HistoricProcessInstanceApi* | [**queryHistoricProcessInstancesCount**](docs/Api/HistoricProcessInstanceApi.md#queryhistoricprocessinstancescount) | **POST** /history/process-instance/count | Get List Count (POST)
*HistoricProcessInstanceApi* | [**setRemovalTimeAsync**](docs/Api/HistoricProcessInstanceApi.md#setremovaltimeasync) | **POST** /history/process-instance/set-removal-time | Set Removal Time Async (POST)
*IdentityApi* | [**checkPassword**](docs/Api/IdentityApi.md#checkpassword) | **POST** /identity/password-policy | Validate Password
*IdentityApi* | [**getGroupInfo**](docs/Api/IdentityApi.md#getgroupinfo) | **GET** /identity/groups | Get a User&#39;s Groups
*IdentityApi* | [**getPasswordPolicy**](docs/Api/IdentityApi.md#getpasswordpolicy) | **GET** /identity/password-policy | Get Password Policy
*IdentityApi* | [**verifyUser**](docs/Api/IdentityApi.md#verifyuser) | **POST** /identity/verify | Verify User
*IncidentApi* | [**clearIncidentAnnotation**](docs/Api/IncidentApi.md#clearincidentannotation) | **DELETE** /incident/{id}/annotation | Clear Incident Annotation
*IncidentApi* | [**getIncident**](docs/Api/IncidentApi.md#getincident) | **GET** /incident/{id} | Get Incident
*IncidentApi* | [**getIncidents**](docs/Api/IncidentApi.md#getincidents) | **GET** /incident | Get List
*IncidentApi* | [**getIncidentsCount**](docs/Api/IncidentApi.md#getincidentscount) | **GET** /incident/count | Get List Count
*IncidentApi* | [**resolveIncident**](docs/Api/IncidentApi.md#resolveincident) | **DELETE** /incident/{id} | Resolve Incident
*IncidentApi* | [**setIncidentAnnotation**](docs/Api/IncidentApi.md#setincidentannotation) | **PUT** /incident/{id}/annotation | Set Incident Annotation
*JobApi* | [**executeJob**](docs/Api/JobApi.md#executejob) | **POST** /job/{id}/execute | Execute Job
*JobApi* | [**getJob**](docs/Api/JobApi.md#getjob) | **GET** /job/{id} | Get Job
*JobApi* | [**getJobs**](docs/Api/JobApi.md#getjobs) | **GET** /job | Get Jobs
*JobApi* | [**getJobsCount**](docs/Api/JobApi.md#getjobscount) | **GET** /job/count | Get Job Count
*JobApi* | [**getStacktrace**](docs/Api/JobApi.md#getstacktrace) | **GET** /job/{id}/stacktrace | Get Exception Stacktrace
*JobApi* | [**queryJobs**](docs/Api/JobApi.md#queryjobs) | **POST** /job | Get Jobs (POST)
*JobApi* | [**queryJobsCount**](docs/Api/JobApi.md#queryjobscount) | **POST** /job/count | Get Job Count (POST)
*JobApi* | [**recalculateDuedate**](docs/Api/JobApi.md#recalculateduedate) | **POST** /job/{id}/duedate/recalculate | Recalculate Job Due Date
*JobApi* | [**setJobDuedate**](docs/Api/JobApi.md#setjobduedate) | **PUT** /job/{id}/duedate | Set Job Due Date
*JobApi* | [**setJobPriority**](docs/Api/JobApi.md#setjobpriority) | **PUT** /job/{id}/priority | Set Job Priority
*JobApi* | [**setJobRetries**](docs/Api/JobApi.md#setjobretries) | **PUT** /job/{id}/retries | Set Job Retries
*JobApi* | [**setJobRetriesAsyncOperation**](docs/Api/JobApi.md#setjobretriesasyncoperation) | **POST** /job/retries | Set Job Retries Async (POST)
*JobApi* | [**updateJobSuspensionState**](docs/Api/JobApi.md#updatejobsuspensionstate) | **PUT** /job/{id}/suspended | Activate/Suspend Job By Id
*JobApi* | [**updateSuspensionStateBy**](docs/Api/JobApi.md#updatesuspensionstateby) | **PUT** /job/suspended | Activate/Suspend Jobs
*MessageApi* | [**deliverMessage**](docs/Api/MessageApi.md#delivermessage) | **POST** /message | Correlate
*MetricsApi* | [**deleteTaskMetrics**](docs/Api/MetricsApi.md#deletetaskmetrics) | **DELETE** /metrics/task-worker | Delete Task Worker Metrics
*MetricsApi* | [**getMetrics**](docs/Api/MetricsApi.md#getmetrics) | **GET** /metrics/{metrics-name}/sum | Get Sum
*MetricsApi* | [**interval**](docs/Api/MetricsApi.md#interval) | **GET** /metrics | Get Metrics in Interval
*ProcessDefinitionApi* | [**deleteProcessDefinition**](docs/Api/ProcessDefinitionApi.md#deleteprocessdefinition) | **DELETE** /process-definition/{id} | Delete
*ProcessDefinitionApi* | [**deleteProcessDefinitionsByKey**](docs/Api/ProcessDefinitionApi.md#deleteprocessdefinitionsbykey) | **DELETE** /process-definition/key/{key} | Delete By Key
*ProcessDefinitionApi* | [**deleteProcessDefinitionsByKeyAndTenantId**](docs/Api/ProcessDefinitionApi.md#deleteprocessdefinitionsbykeyandtenantid) | **DELETE** /process-definition/key/{key}/tenant-id/{tenant-id} | Delete By Key
*ProcessDefinitionApi* | [**getActivityStatistics**](docs/Api/ProcessDefinitionApi.md#getactivitystatistics) | **GET** /process-definition/{id}/statistics | Get Activity Instance Statistics
*ProcessDefinitionApi* | [**getActivityStatisticsByProcessDefinitionKey**](docs/Api/ProcessDefinitionApi.md#getactivitystatisticsbyprocessdefinitionkey) | **GET** /process-definition/key/{key}/statistics | Get Activity Instance Statistics
*ProcessDefinitionApi* | [**getActivityStatisticsByProcessDefinitionKeyAndTenantId**](docs/Api/ProcessDefinitionApi.md#getactivitystatisticsbyprocessdefinitionkeyandtenantid) | **GET** /process-definition/key/{key}/tenant-id/{tenant-id}/statistics | Get Activity Instance Statistics
*ProcessDefinitionApi* | [**getDeployedStartForm**](docs/Api/ProcessDefinitionApi.md#getdeployedstartform) | **GET** /process-definition/{id}/deployed-start-form | Get Deployed Start Form
*ProcessDefinitionApi* | [**getDeployedStartFormByKey**](docs/Api/ProcessDefinitionApi.md#getdeployedstartformbykey) | **GET** /process-definition/key/{key}/deployed-start-form | Get Deployed Start Form
*ProcessDefinitionApi* | [**getDeployedStartFormByKeyAndTenantId**](docs/Api/ProcessDefinitionApi.md#getdeployedstartformbykeyandtenantid) | **GET** /process-definition/key/{key}/tenant-id/{tenant-id}/deployed-start-form | Get Deployed Start Form
*ProcessDefinitionApi* | [**getLatestProcessDefinitionByTenantId**](docs/Api/ProcessDefinitionApi.md#getlatestprocessdefinitionbytenantid) | **GET** /process-definition/key/{key}/tenant-id/{tenant-id} | Get
*ProcessDefinitionApi* | [**getProcessDefinition**](docs/Api/ProcessDefinitionApi.md#getprocessdefinition) | **GET** /process-definition/{id} | Get
*ProcessDefinitionApi* | [**getProcessDefinitionBpmn20Xml**](docs/Api/ProcessDefinitionApi.md#getprocessdefinitionbpmn20xml) | **GET** /process-definition/{id}/xml | Get XML
*ProcessDefinitionApi* | [**getProcessDefinitionBpmn20XmlByKey**](docs/Api/ProcessDefinitionApi.md#getprocessdefinitionbpmn20xmlbykey) | **GET** /process-definition/key/{key}/xml | Get XML
*ProcessDefinitionApi* | [**getProcessDefinitionBpmn20XmlByKeyAndTenantId**](docs/Api/ProcessDefinitionApi.md#getprocessdefinitionbpmn20xmlbykeyandtenantid) | **GET** /process-definition/key/{key}/tenant-id/{tenant-id}/xml | Get XML
*ProcessDefinitionApi* | [**getProcessDefinitionByKey**](docs/Api/ProcessDefinitionApi.md#getprocessdefinitionbykey) | **GET** /process-definition/key/{key} | Get
*ProcessDefinitionApi* | [**getProcessDefinitionDiagram**](docs/Api/ProcessDefinitionApi.md#getprocessdefinitiondiagram) | **GET** /process-definition/{id}/diagram | Get Diagram
*ProcessDefinitionApi* | [**getProcessDefinitionDiagramByKey**](docs/Api/ProcessDefinitionApi.md#getprocessdefinitiondiagrambykey) | **GET** /process-definition/key/{key}/diagram | Get Diagram
*ProcessDefinitionApi* | [**getProcessDefinitionDiagramByKeyAndTenantId**](docs/Api/ProcessDefinitionApi.md#getprocessdefinitiondiagrambykeyandtenantid) | **GET** /process-definition/key/{key}/tenant-id/{tenant-id}/diagram | Get Diagram
*ProcessDefinitionApi* | [**getProcessDefinitionStatistics**](docs/Api/ProcessDefinitionApi.md#getprocessdefinitionstatistics) | **GET** /process-definition/statistics | Get Process Instance Statistics
*ProcessDefinitionApi* | [**getProcessDefinitions**](docs/Api/ProcessDefinitionApi.md#getprocessdefinitions) | **GET** /process-definition | Get List
*ProcessDefinitionApi* | [**getProcessDefinitionsCount**](docs/Api/ProcessDefinitionApi.md#getprocessdefinitionscount) | **GET** /process-definition/count | Get List Count
*ProcessDefinitionApi* | [**getRenderedStartForm**](docs/Api/ProcessDefinitionApi.md#getrenderedstartform) | **GET** /process-definition/{id}/rendered-form | Get Rendered Start Form
*ProcessDefinitionApi* | [**getRenderedStartFormByKey**](docs/Api/ProcessDefinitionApi.md#getrenderedstartformbykey) | **GET** /process-definition/key/{key}/rendered-form | Get Rendered Start Form
*ProcessDefinitionApi* | [**getRenderedStartFormByKeyAndTenantId**](docs/Api/ProcessDefinitionApi.md#getrenderedstartformbykeyandtenantid) | **GET** /process-definition/key/{key}/tenant-id/{tenant-id}/rendered-form | Get Rendered Start Form
*ProcessDefinitionApi* | [**getStartForm**](docs/Api/ProcessDefinitionApi.md#getstartform) | **GET** /process-definition/{id}/startForm | Get Start Form Key
*ProcessDefinitionApi* | [**getStartFormByKey**](docs/Api/ProcessDefinitionApi.md#getstartformbykey) | **GET** /process-definition/key/{key}/startForm | Get Start Form Key
*ProcessDefinitionApi* | [**getStartFormByKeyAndTenantId**](docs/Api/ProcessDefinitionApi.md#getstartformbykeyandtenantid) | **GET** /process-definition/key/{key}/tenant-id/{tenant-id}/startForm | Get Start Form Key
*ProcessDefinitionApi* | [**getStartFormVariables**](docs/Api/ProcessDefinitionApi.md#getstartformvariables) | **GET** /process-definition/{id}/form-variables | Get Start Form Variables
*ProcessDefinitionApi* | [**getStartFormVariablesByKey**](docs/Api/ProcessDefinitionApi.md#getstartformvariablesbykey) | **GET** /process-definition/key/{key}/form-variables | Get Start Form Variables
*ProcessDefinitionApi* | [**getStartFormVariablesByKeyAndTenantId**](docs/Api/ProcessDefinitionApi.md#getstartformvariablesbykeyandtenantid) | **GET** /process-definition/key/{key}/tenant-id/{tenant-id}/form-variables | Get Start Form Variables
*ProcessDefinitionApi* | [**restartProcessInstance**](docs/Api/ProcessDefinitionApi.md#restartprocessinstance) | **POST** /process-definition/{id}/restart | Restart Process Instance
*ProcessDefinitionApi* | [**restartProcessInstanceAsyncOperation**](docs/Api/ProcessDefinitionApi.md#restartprocessinstanceasyncoperation) | **POST** /process-definition/{id}/restart-async | Restart Process Instance Async
*ProcessDefinitionApi* | [**startProcessInstance**](docs/Api/ProcessDefinitionApi.md#startprocessinstance) | **POST** /process-definition/{id}/start | Start Instance
*ProcessDefinitionApi* | [**startProcessInstanceByKey**](docs/Api/ProcessDefinitionApi.md#startprocessinstancebykey) | **POST** /process-definition/key/{key}/start | Start Instance
*ProcessDefinitionApi* | [**startProcessInstanceByKeyAndTenantId**](docs/Api/ProcessDefinitionApi.md#startprocessinstancebykeyandtenantid) | **POST** /process-definition/key/{key}/tenant-id/{tenant-id}/start | Start Instance
*ProcessDefinitionApi* | [**submitForm**](docs/Api/ProcessDefinitionApi.md#submitform) | **POST** /process-definition/{id}/submit-form | Submit Start Form
*ProcessDefinitionApi* | [**submitFormByKey**](docs/Api/ProcessDefinitionApi.md#submitformbykey) | **POST** /process-definition/key/{key}/submit-form | Submit Start Form
*ProcessDefinitionApi* | [**submitFormByKeyAndTenantId**](docs/Api/ProcessDefinitionApi.md#submitformbykeyandtenantid) | **POST** /process-definition/key/{key}/tenant-id/{tenant-id}/submit-form | Submit Start Form
*ProcessDefinitionApi* | [**updateHistoryTimeToLiveByProcessDefinitionId**](docs/Api/ProcessDefinitionApi.md#updatehistorytimetolivebyprocessdefinitionid) | **PUT** /process-definition/{id}/history-time-to-live | Update History Time to Live
*ProcessDefinitionApi* | [**updateHistoryTimeToLiveByProcessDefinitionKey**](docs/Api/ProcessDefinitionApi.md#updatehistorytimetolivebyprocessdefinitionkey) | **PUT** /process-definition/key/{key}/history-time-to-live | Update History Time to Live
*ProcessDefinitionApi* | [**updateHistoryTimeToLiveByProcessDefinitionKeyAndTenantId**](docs/Api/ProcessDefinitionApi.md#updatehistorytimetolivebyprocessdefinitionkeyandtenantid) | **PUT** /process-definition/key/{key}/tenant-id/{tenant-id}/history-time-to-live | Update History Time to Live
*ProcessDefinitionApi* | [**updateProcessDefinitionSuspensionState**](docs/Api/ProcessDefinitionApi.md#updateprocessdefinitionsuspensionstate) | **PUT** /process-definition/suspended | Activate/Suspend By Key
*ProcessDefinitionApi* | [**updateProcessDefinitionSuspensionStateById**](docs/Api/ProcessDefinitionApi.md#updateprocessdefinitionsuspensionstatebyid) | **PUT** /process-definition/{id}/suspended | Activate/Suspend By Id
*ProcessDefinitionApi* | [**updateProcessDefinitionSuspensionStateByKey**](docs/Api/ProcessDefinitionApi.md#updateprocessdefinitionsuspensionstatebykey) | **PUT** /process-definition/key/{key}/suspended | Activate/Suspend by Id
*ProcessDefinitionApi* | [**updateProcessDefinitionSuspensionStateByKeyAndTenantId**](docs/Api/ProcessDefinitionApi.md#updateprocessdefinitionsuspensionstatebykeyandtenantid) | **PUT** /process-definition/key/{key}/tenant-id/{tenant-id}/suspended | Activate/Suspend by Id
*ProcessInstanceApi* | [**deleteAsyncHistoricQueryBased**](docs/Api/ProcessInstanceApi.md#deleteasynchistoricquerybased) | **POST** /process-instance/delete-historic-query-based | Delete Async Historic Query Based (POST)
*ProcessInstanceApi* | [**deleteProcessInstance**](docs/Api/ProcessInstanceApi.md#deleteprocessinstance) | **DELETE** /process-instance/{id} | Delete
*ProcessInstanceApi* | [**deleteProcessInstanceVariable**](docs/Api/ProcessInstanceApi.md#deleteprocessinstancevariable) | **DELETE** /process-instance/{id}/variables/{varName} | Delete Process Variable
*ProcessInstanceApi* | [**deleteProcessInstancesAsyncOperation**](docs/Api/ProcessInstanceApi.md#deleteprocessinstancesasyncoperation) | **POST** /process-instance/delete | Delete Async (POST)
*ProcessInstanceApi* | [**getActivityInstanceTree**](docs/Api/ProcessInstanceApi.md#getactivityinstancetree) | **GET** /process-instance/{id}/activity-instances | Get Activity Instance
*ProcessInstanceApi* | [**getProcessInstance**](docs/Api/ProcessInstanceApi.md#getprocessinstance) | **GET** /process-instance/{id} | Get Process Instance
*ProcessInstanceApi* | [**getProcessInstanceVariable**](docs/Api/ProcessInstanceApi.md#getprocessinstancevariable) | **GET** /process-instance/{id}/variables/{varName} | Get Process Variable
*ProcessInstanceApi* | [**getProcessInstanceVariableBinary**](docs/Api/ProcessInstanceApi.md#getprocessinstancevariablebinary) | **GET** /process-instance/{id}/variables/{varName}/data | Get Process Variable (Binary)
*ProcessInstanceApi* | [**getProcessInstanceVariables**](docs/Api/ProcessInstanceApi.md#getprocessinstancevariables) | **GET** /process-instance/{id}/variables | Get Process Variables
*ProcessInstanceApi* | [**getProcessInstances**](docs/Api/ProcessInstanceApi.md#getprocessinstances) | **GET** /process-instance | Get List
*ProcessInstanceApi* | [**getProcessInstancesCount**](docs/Api/ProcessInstanceApi.md#getprocessinstancescount) | **GET** /process-instance/count | Get List Count
*ProcessInstanceApi* | [**modifyProcessInstance**](docs/Api/ProcessInstanceApi.md#modifyprocessinstance) | **POST** /process-instance/{id}/modification | Modify Process Instance Execution State
*ProcessInstanceApi* | [**modifyProcessInstanceAsyncOperation**](docs/Api/ProcessInstanceApi.md#modifyprocessinstanceasyncoperation) | **POST** /process-instance/{id}/modification-async | Modify Process Instance Execution State Async
*ProcessInstanceApi* | [**modifyProcessInstanceVariables**](docs/Api/ProcessInstanceApi.md#modifyprocessinstancevariables) | **POST** /process-instance/{id}/variables | Update/Delete Process Variables
*ProcessInstanceApi* | [**queryProcessInstances**](docs/Api/ProcessInstanceApi.md#queryprocessinstances) | **POST** /process-instance | Get List (POST)
*ProcessInstanceApi* | [**queryProcessInstancesCount**](docs/Api/ProcessInstanceApi.md#queryprocessinstancescount) | **POST** /process-instance/count | Get List Count (POST)
*ProcessInstanceApi* | [**setProcessInstanceVariable**](docs/Api/ProcessInstanceApi.md#setprocessinstancevariable) | **PUT** /process-instance/{id}/variables/{varName} | Update Process Variable
*ProcessInstanceApi* | [**setProcessInstanceVariableBinary**](docs/Api/ProcessInstanceApi.md#setprocessinstancevariablebinary) | **POST** /process-instance/{id}/variables/{varName}/data | Update Process Variable (Binary)
*ProcessInstanceApi* | [**setRetriesByProcess**](docs/Api/ProcessInstanceApi.md#setretriesbyprocess) | **POST** /process-instance/job-retries | Set Job Retries Async (POST)
*ProcessInstanceApi* | [**setRetriesByProcessHistoricQueryBased**](docs/Api/ProcessInstanceApi.md#setretriesbyprocesshistoricquerybased) | **POST** /process-instance/job-retries-historic-query-based | Set Job Retries Async Historic Query Based (POST)
*ProcessInstanceApi* | [**setVariablesAsyncOperation**](docs/Api/ProcessInstanceApi.md#setvariablesasyncoperation) | **POST** /process-instance/variables-async | Set Variables Async (POST)
*ProcessInstanceApi* | [**updateSuspensionState**](docs/Api/ProcessInstanceApi.md#updatesuspensionstate) | **PUT** /process-instance/suspended | Activate/Suspend In Group
*ProcessInstanceApi* | [**updateSuspensionStateAsyncOperation**](docs/Api/ProcessInstanceApi.md#updatesuspensionstateasyncoperation) | **POST** /process-instance/suspended-async | Activate/Suspend In Batch
*ProcessInstanceApi* | [**updateSuspensionStateById**](docs/Api/ProcessInstanceApi.md#updatesuspensionstatebyid) | **PUT** /process-instance/{id}/suspended | Activate/Suspend Process Instance By Id
*SchemaLogApi* | [**getSchemaLog**](docs/Api/SchemaLogApi.md#getschemalog) | **GET** /schema/log | Get List
*SchemaLogApi* | [**querySchemaLog**](docs/Api/SchemaLogApi.md#queryschemalog) | **POST** /schema/log | Get List (POST)
*SignalApi* | [**throwSignal**](docs/Api/SignalApi.md#throwsignal) | **POST** /signal | Event
*TaskApi* | [**claim**](docs/Api/TaskApi.md#claim) | **POST** /task/{id}/claim | Claim
*TaskApi* | [**complete**](docs/Api/TaskApi.md#complete) | **POST** /task/{id}/complete | Complete
*TaskApi* | [**createTask**](docs/Api/TaskApi.md#createtask) | **POST** /task/create | Create
*TaskApi* | [**delegateTask**](docs/Api/TaskApi.md#delegatetask) | **POST** /task/{id}/delegate | Delegate
*TaskApi* | [**deleteTask**](docs/Api/TaskApi.md#deletetask) | **DELETE** /task/{id} | Delete
*TaskApi* | [**getDeployedForm**](docs/Api/TaskApi.md#getdeployedform) | **GET** /task/{id}/deployed-form | Get Deployed Form
*TaskApi* | [**getForm**](docs/Api/TaskApi.md#getform) | **GET** /task/{id}/form | Get Form Key
*TaskApi* | [**getFormVariables**](docs/Api/TaskApi.md#getformvariables) | **GET** /task/{id}/form-variables | Get Task Form Variables
*TaskApi* | [**getRenderedForm**](docs/Api/TaskApi.md#getrenderedform) | **GET** /task/{id}/rendered-form | Get Rendered Form
*TaskApi* | [**getTask**](docs/Api/TaskApi.md#gettask) | **GET** /task/{id} | Get
*TaskApi* | [**getTasks**](docs/Api/TaskApi.md#gettasks) | **GET** /task | Get List
*TaskApi* | [**getTasksCount**](docs/Api/TaskApi.md#gettaskscount) | **GET** /task/count | Get List Count
*TaskApi* | [**handleBpmnError**](docs/Api/TaskApi.md#handlebpmnerror) | **POST** /task/{id}/bpmnError | Handle BPMN Error
*TaskApi* | [**handleEscalation**](docs/Api/TaskApi.md#handleescalation) | **POST** /task/{id}/bpmnEscalation | Handle BPMN Escalation
*TaskApi* | [**queryTasks**](docs/Api/TaskApi.md#querytasks) | **POST** /task | Get List (POST)
*TaskApi* | [**queryTasksCount**](docs/Api/TaskApi.md#querytaskscount) | **POST** /task/count | Get List Count (POST)
*TaskApi* | [**resolve**](docs/Api/TaskApi.md#resolve) | **POST** /task/{id}/resolve | Resolve
*TaskApi* | [**setAssignee**](docs/Api/TaskApi.md#setassignee) | **POST** /task/{id}/assignee | Set Assignee
*TaskApi* | [**submit**](docs/Api/TaskApi.md#submit) | **POST** /task/{id}/submit-form | Submit Form
*TaskApi* | [**unclaim**](docs/Api/TaskApi.md#unclaim) | **POST** /task/{id}/unclaim | Unclaim
*TaskApi* | [**updateTask**](docs/Api/TaskApi.md#updatetask) | **PUT** /task/{id} | Update
*TaskAttachmentApi* | [**addAttachment**](docs/Api/TaskAttachmentApi.md#addattachment) | **POST** /task/{id}/attachment/create | Create
*TaskAttachmentApi* | [**deleteAttachment**](docs/Api/TaskAttachmentApi.md#deleteattachment) | **DELETE** /task/{id}/attachment/{attachmentId} | Delete
*TaskAttachmentApi* | [**getAttachment**](docs/Api/TaskAttachmentApi.md#getattachment) | **GET** /task/{id}/attachment/{attachmentId} | Get
*TaskAttachmentApi* | [**getAttachmentData**](docs/Api/TaskAttachmentApi.md#getattachmentdata) | **GET** /task/{id}/attachment/{attachmentId}/data | Get (Binary)
*TaskAttachmentApi* | [**getAttachments**](docs/Api/TaskAttachmentApi.md#getattachments) | **GET** /task/{id}/attachment | Get List
*TaskCommentApi* | [**createComment**](docs/Api/TaskCommentApi.md#createcomment) | **POST** /task/{id}/comment/create | Create
*TaskCommentApi* | [**getComment**](docs/Api/TaskCommentApi.md#getcomment) | **GET** /task/{id}/comment/{commentId} | Get
*TaskCommentApi* | [**getComments**](docs/Api/TaskCommentApi.md#getcomments) | **GET** /task/{id}/comment | Get List
*TaskIdentityLinkApi* | [**addIdentityLink**](docs/Api/TaskIdentityLinkApi.md#addidentitylink) | **POST** /task/{id}/identity-links | Add
*TaskIdentityLinkApi* | [**deleteIdentityLink**](docs/Api/TaskIdentityLinkApi.md#deleteidentitylink) | **POST** /task/{id}/identity-links/delete | Delete
*TaskIdentityLinkApi* | [**getIdentityLinks**](docs/Api/TaskIdentityLinkApi.md#getidentitylinks) | **GET** /task/{id}/identity-links | Get List
*TaskLocalVariableApi* | [**deleteTaskLocalVariable**](docs/Api/TaskLocalVariableApi.md#deletetasklocalvariable) | **DELETE** /task/{id}/localVariables/{varName} | Delete Local Task Variable
*TaskLocalVariableApi* | [**getTaskLocalVariable**](docs/Api/TaskLocalVariableApi.md#gettasklocalvariable) | **GET** /task/{id}/localVariables/{varName} | Get Local Task Variable
*TaskLocalVariableApi* | [**getTaskLocalVariableBinary**](docs/Api/TaskLocalVariableApi.md#gettasklocalvariablebinary) | **GET** /task/{id}/localVariables/{varName}/data | Get Local Task Variable (Binary)
*TaskLocalVariableApi* | [**getTaskLocalVariables**](docs/Api/TaskLocalVariableApi.md#gettasklocalvariables) | **GET** /task/{id}/localVariables | Get Local Task Variables
*TaskLocalVariableApi* | [**modifyTaskLocalVariables**](docs/Api/TaskLocalVariableApi.md#modifytasklocalvariables) | **POST** /task/{id}/localVariables | Update/Delete Local Task Variables
*TaskLocalVariableApi* | [**putTaskLocalVariable**](docs/Api/TaskLocalVariableApi.md#puttasklocalvariable) | **PUT** /task/{id}/localVariables/{varName} | Update Local Task Variable
*TaskLocalVariableApi* | [**setBinaryTaskLocalVariable**](docs/Api/TaskLocalVariableApi.md#setbinarytasklocalvariable) | **POST** /task/{id}/localVariables/{varName}/data | Update Local Task Variable (Binary)
*TaskVariableApi* | [**deleteTaskVariable**](docs/Api/TaskVariableApi.md#deletetaskvariable) | **DELETE** /task/{id}/variables/{varName} | Delete Task Variable
*TaskVariableApi* | [**getTaskVariable**](docs/Api/TaskVariableApi.md#gettaskvariable) | **GET** /task/{id}/variables/{varName} | Get Task Variable
*TaskVariableApi* | [**getTaskVariableBinary**](docs/Api/TaskVariableApi.md#gettaskvariablebinary) | **GET** /task/{id}/variables/{varName}/data | Get Task Variable (Binary)
*TaskVariableApi* | [**getTaskVariables**](docs/Api/TaskVariableApi.md#gettaskvariables) | **GET** /task/{id}/variables | Get Task Variables
*TaskVariableApi* | [**modifyTaskVariables**](docs/Api/TaskVariableApi.md#modifytaskvariables) | **POST** /task/{id}/variables | Update/Delete Task Variables
*TaskVariableApi* | [**putTaskVariable**](docs/Api/TaskVariableApi.md#puttaskvariable) | **PUT** /task/{id}/variables/{varName} | Update Task Variable
*TaskVariableApi* | [**setBinaryTaskVariable**](docs/Api/TaskVariableApi.md#setbinarytaskvariable) | **POST** /task/{id}/variables/{varName}/data | Update Task Variable (Binary)
*TelemetryApi* | [**configureTelemetry**](docs/Api/TelemetryApi.md#configuretelemetry) | **POST** /telemetry/configuration | Configure Telemetry
*TelemetryApi* | [**getTelemetryConfiguration**](docs/Api/TelemetryApi.md#gettelemetryconfiguration) | **GET** /telemetry/configuration | Fetch Telemetry Configuration
*TenantApi* | [**availableTenantGroupMembersOperations**](docs/Api/TenantApi.md#availabletenantgroupmembersoperations) | **OPTIONS** /tenant/{id}/group-members | Tenant Group Membership Resource Options
*TenantApi* | [**availableTenantInstanceOperations**](docs/Api/TenantApi.md#availabletenantinstanceoperations) | **OPTIONS** /tenant/{id} | Tenant Resource Options
*TenantApi* | [**availableTenantResourceOperations**](docs/Api/TenantApi.md#availabletenantresourceoperations) | **OPTIONS** /tenant | Tenant Resource Options
*TenantApi* | [**availableTenantUserMembersOperations**](docs/Api/TenantApi.md#availabletenantusermembersoperations) | **OPTIONS** /tenant/{id}/user-members | Tenant User Membership Resource Options
*TenantApi* | [**createGroupMembership**](docs/Api/TenantApi.md#creategroupmembership) | **PUT** /tenant/{id}/group-members/{groupId} | Create Tenant Group Membership
*TenantApi* | [**createTenant**](docs/Api/TenantApi.md#createtenant) | **POST** /tenant/create | Create Tenant
*TenantApi* | [**createUserMembership**](docs/Api/TenantApi.md#createusermembership) | **PUT** /tenant/{id}/user-members/{userId} | Create Tenant User Membership
*TenantApi* | [**deleteGroupMembership**](docs/Api/TenantApi.md#deletegroupmembership) | **DELETE** /tenant/{id}/group-members/{groupId} | Create Tenant Group Membership
*TenantApi* | [**deleteTenant**](docs/Api/TenantApi.md#deletetenant) | **DELETE** /tenant/{id} | Delete Tenant
*TenantApi* | [**deleteUserMembership**](docs/Api/TenantApi.md#deleteusermembership) | **DELETE** /tenant/{id}/user-members/{userId} | Delete a Tenant User Membership
*TenantApi* | [**getTenant**](docs/Api/TenantApi.md#gettenant) | **GET** /tenant/{id} | Get Tenant
*TenantApi* | [**getTenantCount**](docs/Api/TenantApi.md#gettenantcount) | **GET** /tenant/count | Get Tenant Count
*TenantApi* | [**queryTenants**](docs/Api/TenantApi.md#querytenants) | **GET** /tenant | Get Tenants
*TenantApi* | [**updateTenant**](docs/Api/TenantApi.md#updatetenant) | **PUT** /tenant/{id} | Update Tenant
*UserApi* | [**availableOperations**](docs/Api/UserApi.md#availableoperations) | **OPTIONS** /user | Options
*UserApi* | [**availableUserOperations**](docs/Api/UserApi.md#availableuseroperations) | **OPTIONS** /user/{id} | Options
*UserApi* | [**createUser**](docs/Api/UserApi.md#createuser) | **POST** /user/create | Create
*UserApi* | [**deleteUser**](docs/Api/UserApi.md#deleteuser) | **DELETE** /user/{id} | Delete
*UserApi* | [**getUserCount**](docs/Api/UserApi.md#getusercount) | **GET** /user/count | Get List Count
*UserApi* | [**getUserProfile**](docs/Api/UserApi.md#getuserprofile) | **GET** /user/{id}/profile | Get Profile
*UserApi* | [**getUsers**](docs/Api/UserApi.md#getusers) | **GET** /user | Get List
*UserApi* | [**unlockUser**](docs/Api/UserApi.md#unlockuser) | **POST** /user/{id}/unlock | Unlock User
*UserApi* | [**updateCredentials**](docs/Api/UserApi.md#updatecredentials) | **PUT** /user/{id}/credentials | Update Credentials
*UserApi* | [**updateProfile**](docs/Api/UserApi.md#updateprofile) | **PUT** /user/{id}/profile | Update User Profile
*VariableInstanceApi* | [**getVariableInstance**](docs/Api/VariableInstanceApi.md#getvariableinstance) | **GET** /variable-instance/{id} | Get Variable Instance
*VariableInstanceApi* | [**getVariableInstanceBinary**](docs/Api/VariableInstanceApi.md#getvariableinstancebinary) | **GET** /variable-instance/{id}/data | Get Variable Instance (Binary)
*VariableInstanceApi* | [**getVariableInstances**](docs/Api/VariableInstanceApi.md#getvariableinstances) | **GET** /variable-instance | Get Variable Instances
*VariableInstanceApi* | [**getVariableInstancesCount**](docs/Api/VariableInstanceApi.md#getvariableinstancescount) | **GET** /variable-instance/count | Get Variable Instance Count
*VariableInstanceApi* | [**queryVariableInstances**](docs/Api/VariableInstanceApi.md#queryvariableinstances) | **POST** /variable-instance | Get Variable Instances (POST)
*VariableInstanceApi* | [**queryVariableInstancesCount**](docs/Api/VariableInstanceApi.md#queryvariableinstancescount) | **POST** /variable-instance/count | Get Variable Instance Count (POST)
*VersionApi* | [**getRestAPIVersion**](docs/Api/VersionApi.md#getrestapiversion) | **GET** /version | Get Rest API version

## Models

- [AbstractSetRemovalTimeDto](docs/Model/AbstractSetRemovalTimeDto.md)
- [ActivityInstanceDto](docs/Model/ActivityInstanceDto.md)
- [ActivityInstanceIncidentDto](docs/Model/ActivityInstanceIncidentDto.md)
- [ActivityStatisticsResultDto](docs/Model/ActivityStatisticsResultDto.md)
- [AnnotationDto](docs/Model/AnnotationDto.md)
- [AtomLink](docs/Model/AtomLink.md)
- [AttachmentDto](docs/Model/AttachmentDto.md)
- [AttachmentDtoAllOf](docs/Model/AttachmentDtoAllOf.md)
- [AuthenticationResult](docs/Model/AuthenticationResult.md)
- [AuthorizationExceptionDto](docs/Model/AuthorizationExceptionDto.md)
- [AuthorizationExceptionDtoAllOf](docs/Model/AuthorizationExceptionDtoAllOf.md)
- [BasicUserCredentialsDto](docs/Model/BasicUserCredentialsDto.md)
- [BatchDto](docs/Model/BatchDto.md)
- [BatchStatisticsDto](docs/Model/BatchStatisticsDto.md)
- [BatchStatisticsDtoAllOf](docs/Model/BatchStatisticsDtoAllOf.md)
- [CaseDefinitionDto](docs/Model/CaseDefinitionDto.md)
- [CheckPasswordPolicyResultDto](docs/Model/CheckPasswordPolicyResultDto.md)
- [CheckPasswordPolicyResultDtoAllOf](docs/Model/CheckPasswordPolicyResultDtoAllOf.md)
- [CheckPasswordPolicyRuleDto](docs/Model/CheckPasswordPolicyRuleDto.md)
- [CheckPasswordPolicyRuleDtoAllOf](docs/Model/CheckPasswordPolicyRuleDtoAllOf.md)
- [CommentDto](docs/Model/CommentDto.md)
- [CommentDtoAllOf](docs/Model/CommentDtoAllOf.md)
- [CompleteExternalTaskDto](docs/Model/CompleteExternalTaskDto.md)
- [CompleteExternalTaskDtoAllOf](docs/Model/CompleteExternalTaskDtoAllOf.md)
- [CompleteTaskDto](docs/Model/CompleteTaskDto.md)
- [ConditionQueryParameterDto](docs/Model/ConditionQueryParameterDto.md)
- [CorrelationMessageDto](docs/Model/CorrelationMessageDto.md)
- [CountResultDto](docs/Model/CountResultDto.md)
- [CreateIncidentDto](docs/Model/CreateIncidentDto.md)
- [DecisionDefinitionDiagramDto](docs/Model/DecisionDefinitionDiagramDto.md)
- [DecisionDefinitionDto](docs/Model/DecisionDefinitionDto.md)
- [DecisionRequirementsDefinitionDto](docs/Model/DecisionRequirementsDefinitionDto.md)
- [DeleteHistoricProcessInstancesDto](docs/Model/DeleteHistoricProcessInstancesDto.md)
- [DeleteProcessInstancesDto](docs/Model/DeleteProcessInstancesDto.md)
- [DeploymentDto](docs/Model/DeploymentDto.md)
- [DeploymentDtoAllOf](docs/Model/DeploymentDtoAllOf.md)
- [DeploymentResourceDto](docs/Model/DeploymentResourceDto.md)
- [DeploymentWithDefinitionsDto](docs/Model/DeploymentWithDefinitionsDto.md)
- [DeploymentWithDefinitionsDtoAllOf](docs/Model/DeploymentWithDefinitionsDtoAllOf.md)
- [DurationReportResultDto](docs/Model/DurationReportResultDto.md)
- [EvaluateDecisionDto](docs/Model/EvaluateDecisionDto.md)
- [EvaluationConditionDto](docs/Model/EvaluationConditionDto.md)
- [EventSubscriptionDto](docs/Model/EventSubscriptionDto.md)
- [EventSubscriptionQueryDto](docs/Model/EventSubscriptionQueryDto.md)
- [EventSubscriptionQueryDtoSorting](docs/Model/EventSubscriptionQueryDtoSorting.md)
- [ExceptionDto](docs/Model/ExceptionDto.md)
- [ExecutionDto](docs/Model/ExecutionDto.md)
- [ExecutionQueryDto](docs/Model/ExecutionQueryDto.md)
- [ExecutionQueryDtoSorting](docs/Model/ExecutionQueryDtoSorting.md)
- [ExecutionTriggerDto](docs/Model/ExecutionTriggerDto.md)
- [ExtendLockOnExternalTaskDto](docs/Model/ExtendLockOnExternalTaskDto.md)
- [ExtendLockOnExternalTaskDtoAllOf](docs/Model/ExtendLockOnExternalTaskDtoAllOf.md)
- [ExternalTaskBpmnError](docs/Model/ExternalTaskBpmnError.md)
- [ExternalTaskBpmnErrorAllOf](docs/Model/ExternalTaskBpmnErrorAllOf.md)
- [ExternalTaskDto](docs/Model/ExternalTaskDto.md)
- [ExternalTaskFailureDto](docs/Model/ExternalTaskFailureDto.md)
- [ExternalTaskFailureDtoAllOf](docs/Model/ExternalTaskFailureDtoAllOf.md)
- [ExternalTaskQueryDto](docs/Model/ExternalTaskQueryDto.md)
- [ExternalTaskQueryDtoSorting](docs/Model/ExternalTaskQueryDtoSorting.md)
- [FetchExternalTaskTopicDto](docs/Model/FetchExternalTaskTopicDto.md)
- [FetchExternalTasksDto](docs/Model/FetchExternalTasksDto.md)
- [FormDto](docs/Model/FormDto.md)
- [GroupDto](docs/Model/GroupDto.md)
- [GroupQueryDto](docs/Model/GroupQueryDto.md)
- [GroupQueryDtoSorting](docs/Model/GroupQueryDtoSorting.md)
- [HandleExternalTaskDto](docs/Model/HandleExternalTaskDto.md)
- [HistoricActivityInstanceDto](docs/Model/HistoricActivityInstanceDto.md)
- [HistoricActivityInstanceQueryDto](docs/Model/HistoricActivityInstanceQueryDto.md)
- [HistoricActivityInstanceQueryDtoSorting](docs/Model/HistoricActivityInstanceQueryDtoSorting.md)
- [HistoricProcessInstanceDto](docs/Model/HistoricProcessInstanceDto.md)
- [HistoricProcessInstanceQueryDto](docs/Model/HistoricProcessInstanceQueryDto.md)
- [HistoricProcessInstanceQueryDtoSorting](docs/Model/HistoricProcessInstanceQueryDtoSorting.md)
- [HistoryTimeToLiveDto](docs/Model/HistoryTimeToLiveDto.md)
- [IdentityLinkDto](docs/Model/IdentityLinkDto.md)
- [IdentityServiceGroupDto](docs/Model/IdentityServiceGroupDto.md)
- [IdentityServiceGroupInfoDto](docs/Model/IdentityServiceGroupInfoDto.md)
- [IdentityServiceUserDto](docs/Model/IdentityServiceUserDto.md)
- [IncidentDto](docs/Model/IncidentDto.md)
- [IncidentStatisticsResultDto](docs/Model/IncidentStatisticsResultDto.md)
- [JobConditionQueryParameterDto](docs/Model/JobConditionQueryParameterDto.md)
- [JobDto](docs/Model/JobDto.md)
- [JobDuedateDto](docs/Model/JobDuedateDto.md)
- [JobQueryDto](docs/Model/JobQueryDto.md)
- [JobQueryDtoSorting](docs/Model/JobQueryDtoSorting.md)
- [JobSuspensionStateDto](docs/Model/JobSuspensionStateDto.md)
- [JobSuspensionStateDtoAllOf](docs/Model/JobSuspensionStateDtoAllOf.md)
- [LinkableDto](docs/Model/LinkableDto.md)
- [LockExternalTaskDto](docs/Model/LockExternalTaskDto.md)
- [LockExternalTaskDtoAllOf](docs/Model/LockExternalTaskDtoAllOf.md)
- [LockedExternalTaskDto](docs/Model/LockedExternalTaskDto.md)
- [MessageCorrelationResultWithVariableDto](docs/Model/MessageCorrelationResultWithVariableDto.md)
- [MetricsIntervalResultDto](docs/Model/MetricsIntervalResultDto.md)
- [MetricsResultDto](docs/Model/MetricsResultDto.md)
- [MissingAuthorizationDto](docs/Model/MissingAuthorizationDto.md)
- [ParseExceptionDto](docs/Model/ParseExceptionDto.md)
- [ParseExceptionDtoAllOf](docs/Model/ParseExceptionDtoAllOf.md)
- [PasswordPolicyDto](docs/Model/PasswordPolicyDto.md)
- [PasswordPolicyRequestDto](docs/Model/PasswordPolicyRequestDto.md)
- [PasswordPolicyRuleDto](docs/Model/PasswordPolicyRuleDto.md)
- [PatchVariablesDto](docs/Model/PatchVariablesDto.md)
- [PriorityDto](docs/Model/PriorityDto.md)
- [ProblemDto](docs/Model/ProblemDto.md)
- [ProcessDefinitionDiagramDto](docs/Model/ProcessDefinitionDiagramDto.md)
- [ProcessDefinitionDto](docs/Model/ProcessDefinitionDto.md)
- [ProcessDefinitionStatisticsResultDto](docs/Model/ProcessDefinitionStatisticsResultDto.md)
- [ProcessDefinitionSuspensionStateDto](docs/Model/ProcessDefinitionSuspensionStateDto.md)
- [ProcessEngineDto](docs/Model/ProcessEngineDto.md)
- [ProcessInstanceDto](docs/Model/ProcessInstanceDto.md)
- [ProcessInstanceDtoAllOf](docs/Model/ProcessInstanceDtoAllOf.md)
- [ProcessInstanceModificationDto](docs/Model/ProcessInstanceModificationDto.md)
- [ProcessInstanceModificationInstructionDto](docs/Model/ProcessInstanceModificationInstructionDto.md)
- [ProcessInstanceQueryDto](docs/Model/ProcessInstanceQueryDto.md)
- [ProcessInstanceQueryDtoSorting](docs/Model/ProcessInstanceQueryDtoSorting.md)
- [ProcessInstanceSuspensionStateAsyncDto](docs/Model/ProcessInstanceSuspensionStateAsyncDto.md)
- [ProcessInstanceSuspensionStateAsyncDtoAllOf](docs/Model/ProcessInstanceSuspensionStateAsyncDtoAllOf.md)
- [ProcessInstanceSuspensionStateDto](docs/Model/ProcessInstanceSuspensionStateDto.md)
- [ProcessInstanceSuspensionStateDtoAllOf](docs/Model/ProcessInstanceSuspensionStateDtoAllOf.md)
- [ProcessInstanceWithVariablesDto](docs/Model/ProcessInstanceWithVariablesDto.md)
- [ProcessInstanceWithVariablesDtoAllOf](docs/Model/ProcessInstanceWithVariablesDtoAllOf.md)
- [RedeploymentDto](docs/Model/RedeploymentDto.md)
- [ResourceOptionsDto](docs/Model/ResourceOptionsDto.md)
- [ResourceReportDto](docs/Model/ResourceReportDto.md)
- [RestartProcessInstanceDto](docs/Model/RestartProcessInstanceDto.md)
- [RestartProcessInstanceModificationInstructionDto](docs/Model/RestartProcessInstanceModificationInstructionDto.md)
- [RetriesDto](docs/Model/RetriesDto.md)
- [SchemaLogEntryDto](docs/Model/SchemaLogEntryDto.md)
- [SchemaLogQueryDto](docs/Model/SchemaLogQueryDto.md)
- [SchemaLogQueryDtoSorting](docs/Model/SchemaLogQueryDtoSorting.md)
- [SetJobRetriesByProcessDto](docs/Model/SetJobRetriesByProcessDto.md)
- [SetJobRetriesDto](docs/Model/SetJobRetriesDto.md)
- [SetRemovalTimeToHistoricProcessInstancesDto](docs/Model/SetRemovalTimeToHistoricProcessInstancesDto.md)
- [SetRemovalTimeToHistoricProcessInstancesDtoAllOf](docs/Model/SetRemovalTimeToHistoricProcessInstancesDtoAllOf.md)
- [SetRetriesForExternalTasksDto](docs/Model/SetRetriesForExternalTasksDto.md)
- [SetVariablesAsyncDto](docs/Model/SetVariablesAsyncDto.md)
- [SignalDto](docs/Model/SignalDto.md)
- [SortTaskQueryParametersDto](docs/Model/SortTaskQueryParametersDto.md)
- [StartProcessInstanceDto](docs/Model/StartProcessInstanceDto.md)
- [StartProcessInstanceFormDto](docs/Model/StartProcessInstanceFormDto.md)
- [SuspensionStateDto](docs/Model/SuspensionStateDto.md)
- [TaskBpmnErrorDto](docs/Model/TaskBpmnErrorDto.md)
- [TaskDto](docs/Model/TaskDto.md)
- [TaskEscalationDto](docs/Model/TaskEscalationDto.md)
- [TaskQueryDto](docs/Model/TaskQueryDto.md)
- [TaskQueryDtoSorting](docs/Model/TaskQueryDtoSorting.md)
- [TelemetryConfigurationDto](docs/Model/TelemetryConfigurationDto.md)
- [TenantDto](docs/Model/TenantDto.md)
- [TransitionInstanceDto](docs/Model/TransitionInstanceDto.md)
- [TriggerVariableValueDto](docs/Model/TriggerVariableValueDto.md)
- [TriggerVariableValueDtoAllOf](docs/Model/TriggerVariableValueDtoAllOf.md)
- [UserCredentialsDto](docs/Model/UserCredentialsDto.md)
- [UserDto](docs/Model/UserDto.md)
- [UserIdDto](docs/Model/UserIdDto.md)
- [UserProfileDto](docs/Model/UserProfileDto.md)
- [VariableInstanceDto](docs/Model/VariableInstanceDto.md)
- [VariableInstanceDtoAllOf](docs/Model/VariableInstanceDtoAllOf.md)
- [VariableInstanceQueryDto](docs/Model/VariableInstanceQueryDto.md)
- [VariableInstanceQueryDtoSorting](docs/Model/VariableInstanceQueryDtoSorting.md)
- [VariableQueryParameterDto](docs/Model/VariableQueryParameterDto.md)
- [VariableQueryParameterDtoAllOf](docs/Model/VariableQueryParameterDtoAllOf.md)
- [VariableValueDto](docs/Model/VariableValueDto.md)
- [VersionDto](docs/Model/VersionDto.md)

## Authorization
All endpoints do not require authorization.
## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `7.15.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
