<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\AuditLog
 *
 * @method static \Illuminate\Database\Eloquent\Builder|AuditLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AuditLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AuditLog query()
 * @mixin \Eloquent
 */
	class AuditLog extends \Eloquent {}
}

namespace App\Models\Calsys{
/**
 * App\Models\Calsys\CalibratedBy
 *
 * @property int $ID
 * @property string|null $name
 * @method static \Illuminate\Database\Eloquent\Builder|CalibratedBy newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CalibratedBy newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CalibratedBy query()
 * @method static \Illuminate\Database\Eloquent\Builder|CalibratedBy whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalibratedBy whereName($value)
 * @mixin \Eloquent
 */
	class CalibratedBy extends \Eloquent {}
}

namespace App\Models\Calsys{
/**
 * App\Models\Calsys\Calibration
 *
 * @property int $ID
 * @property string|null $deviceID
 * @property string|null $calibratedByID
 * @property string|null $employeeID
 * @property \Illuminate\Support\Carbon|null $calDate Date calibration was completed
 * @property \Illuminate\Support\Carbon|null $calDue Date calibration was completed
 * @property string|null $status
 * @property string|null $record Hyper link to scanned copy of calibration report
 * @property \Illuminate\Support\Carbon $timeStamp
 * @method static \Illuminate\Database\Eloquent\Builder|Calibration newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Calibration newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Calibration query()
 * @method static \Illuminate\Database\Eloquent\Builder|Calibration whereCalDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Calibration whereCalDue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Calibration whereCalibratedByID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Calibration whereDeviceID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Calibration whereEmployeeID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Calibration whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Calibration whereRecord($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Calibration whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Calibration whereTimeStamp($value)
 * @mixin \Eloquent
 */
	class Calibration extends \Eloquent {}
}

namespace App\Models\Calsys{
/**
 * App\Models\Calsys\Device
 *
 * @property int $ID
 * @property string|null $name Name for device
 * @property string|null $description
 * @property string|null $sourceID
 * @property string|null $typeID Type classification of device
 * @property \Illuminate\Support\Carbon|null $initDate
 * @property \App\Models\Calsys\Period|null $period Maximum time between calibrations
 * @property \App\Models\Calsys\Location|null $location location of calibrated device
 * @property string|null $ownerID entity that owns calibrated device
 * @property string|null $serialNumber
 * @property \Illuminate\Support\Carbon $timeStamp
 * @property mixed $init_date
 * @property mixed $time_stamp
 * @property-read \App\Models\Calsys\Owner|null $owner
 * @property-read \App\Models\Calsys\Source|null $source
 * @property-read \App\Models\Calsys\Type|null $type
 * @method static \Illuminate\Database\Eloquent\Builder|Device newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Device newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Device query()
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereInitDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereOwnerID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device wherePeriod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereSerialNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereSourceID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereTimeStamp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereTypeID($value)
 * @mixin \Eloquent
 */
	class Device extends \Eloquent {}
}

namespace App\Models\Calsys{
/**
 * App\Models\Calsys\Employee
 *
 * @property string $ID
 * @property string|null $userInit
 * @property string|null $name
 * @method static \Illuminate\Database\Eloquent\Builder|Employee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Employee newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Employee query()
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereUserInit($value)
 * @mixin \Eloquent
 */
	class Employee extends \Eloquent {}
}

namespace App\Models\Calsys{
/**
 * App\Models\Calsys\Location
 *
 * @property int $ID
 * @property string|null $name
 * @method static \Illuminate\Database\Eloquent\Builder|Location newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Location newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Location query()
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereName($value)
 * @mixin \Eloquent
 */
	class Location extends \Eloquent {}
}

namespace App\Models\Calsys{
/**
 * App\Models\Calsys\Owner
 *
 * @property int $ID
 * @property string|null $name
 * @method static \Illuminate\Database\Eloquent\Builder|Owner newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Owner newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Owner query()
 * @method static \Illuminate\Database\Eloquent\Builder|Owner whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Owner whereName($value)
 * @mixin \Eloquent
 */
	class Owner extends \Eloquent {}
}

namespace App\Models\Calsys{
/**
 * App\Models\Calsys\Period
 *
 * @property int $ID
 * @property string|null $name
 * @method static \Illuminate\Database\Eloquent\Builder|Period newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Period newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Period query()
 * @method static \Illuminate\Database\Eloquent\Builder|Period whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Period whereName($value)
 * @mixin \Eloquent
 */
	class Period extends \Eloquent {}
}

namespace App\Models\Calsys{
/**
 * App\Models\Calsys\Source
 *
 * @property int $ID
 * @property string|null $name
 * @method static \Illuminate\Database\Eloquent\Builder|Source newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Source newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Source query()
 * @method static \Illuminate\Database\Eloquent\Builder|Source whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Source whereName($value)
 * @mixin \Eloquent
 */
	class Source extends \Eloquent {}
}

namespace App\Models\Calsys{
/**
 * App\Models\Calsys\Status
 *
 * @property int $ID
 * @property string|null $name
 * @method static \Illuminate\Database\Eloquent\Builder|Status newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Status newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Status query()
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereName($value)
 * @mixin \Eloquent
 */
	class Status extends \Eloquent {}
}

namespace App\Models\Calsys{
/**
 * App\Models\Calsys\Type
 *
 * @property int $ID
 * @property string|null $name
 * @property string|null $procLink Hyper link to calibration procedures for device types
 * @method static \Illuminate\Database\Eloquent\Builder|Type newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Type newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Type query()
 * @method static \Illuminate\Database\Eloquent\Builder|Type whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Type whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Type whereProcLink($value)
 * @mixin \Eloquent
 */
	class Type extends \Eloquent {}
}

namespace App\Models\Pacsys{
/**
 * App\Models\Pacsys\Action
 *
 * @property int $IDx
 * @property int $ID
 * @property string|null $RecordName record
 * @property string|null $FormName form
 * @property string|null $ValueName action name
 * @property string $Value action value
 * @property \Illuminate\Support\Carbon|null $RecDate Date/Time that addition was made
 * @property \Illuminate\Support\Carbon|null $ActDate Date/Time action was complete
 * @property int $Complete Flag indicating that action is complete
 * @property string $RecEmpCode Employee code of person who made record
 * @property string $ActEmpCode Employee code of person who completed action
 * @property string $Unit
 * @property string|null $ActValue
 * @property string|null $ScopeName
 * @property string $Comment
 * @property string $Tank Number of tank that action is required for
 * @property \Illuminate\Support\Carbon $TimeStamp
 * @property string|null $EmpName
 * @property string|null $IDy
 * @property int|null $ValueNum
 * @property mixed $act_date
 * @property-read mixed $id
 * @property mixed $rec_date
 * @property mixed $time_stamp
 * @method static \Illuminate\Database\Eloquent\Builder|Action newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Action newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Action query()
 * @method static \Illuminate\Database\Eloquent\Builder|Action whereActDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Action whereActEmpCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Action whereActValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Action whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Action whereComplete($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Action whereEmpName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Action whereFormName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Action whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Action whereIDx($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Action whereIDy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Action whereRecDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Action whereRecEmpCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Action whereRecordName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Action whereScopeName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Action whereTank($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Action whereTimeStamp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Action whereUnit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Action whereValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Action whereValueName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Action whereValueNum($value)
 * @mixin \Eloquent
 */
	class Action extends \Eloquent {}
}

namespace App\Models\Pacsys{
/**
 * App\Models\Pacsys\ActionsTemp
 *
 * @property int $IDx
 * @property int $ID
 * @property string|null $RecordName record
 * @property string|null $FormName form
 * @property string|null $ValueName action name
 * @property string $Value action value
 * @property \Illuminate\Support\Carbon|null $RecDate Date/Time that addition was made
 * @property \Illuminate\Support\Carbon|null $ActDate Date/Time action was complete
 * @property int $Complete Flag indicating that action is complete
 * @property string $RecEmpCode Employee code of person who made record
 * @property string $ActEmpCode Employee code of person who completed action
 * @property string $Unit
 * @property string|null $ActValue
 * @property string|null $ScopeName
 * @property string $Comment
 * @property string $Tank
 * @property \Illuminate\Support\Carbon $TimeStamp
 * @property string|null $EmpName
 * @property string|null $IDy
 * @property int|null $ValueNum
 * @property mixed $act_date
 * @property mixed $rec_date
 * @property mixed $time_stamp
 * @method static \Illuminate\Database\Eloquent\Builder|ActionsTemp newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ActionsTemp newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ActionsTemp query()
 * @method static \Illuminate\Database\Eloquent\Builder|ActionsTemp whereActDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActionsTemp whereActEmpCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActionsTemp whereActValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActionsTemp whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActionsTemp whereComplete($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActionsTemp whereEmpName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActionsTemp whereFormName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActionsTemp whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActionsTemp whereIDx($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActionsTemp whereIDy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActionsTemp whereRecDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActionsTemp whereRecEmpCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActionsTemp whereRecordName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActionsTemp whereScopeName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActionsTemp whereTank($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActionsTemp whereTimeStamp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActionsTemp whereUnit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActionsTemp whereValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActionsTemp whereValueName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActionsTemp whereValueNum($value)
 * @mixin \Eloquent
 */
	class ActionsTemp extends \Eloquent {}
}

namespace App\Models\Pacsys{
/**
 * App\Models\Pacsys\Analysis
 *
 * @property int $ID
 * @property string|null $RecordName Identifies serialized tank
 * @property string|null $FormName Identifies type of process chemistry
 * @property \Illuminate\Support\Carbon $Date Identifies the process value being measured
 * @property string|null $Value1 generic field described by rows in BathHeader
 * @property string|null $Value2 generic field described by rows in BathHeader
 * @property string|null $Value3 generic field described by rows in BathHeader
 * @property string|null $Value4 generic field described by rows in BathHeader
 * @property string|null $Value5 generic field described by rows in BathHeader
 * @property string|null $Value6 generic field described by rows in BathHeader
 * @property string|null $Value7 generic field described by rows in BathHeader
 * @property string|null $Value8 generic field described by rows in BathHeader
 * @property string|null $Value9 generic field described by rows in BathHeader
 * @property string|null $Value10 generic field described by rows in BathHeader
 * @property string|null $Value11 generic field described by rows in BathHeader
 * @property string|null $Value12 generic field described by rows in BathHeader
 * @property string|null $Value13 generic field described by rows in BathHeader
 * @property string|null $Value14 generic field described by rows in BathHeader
 * @property string|null $Value15 generic field described by rows in BathHeader
 * @property string|null $Value16 generic field described by rows in BathHeader
 * @property string|null $Value17 generic field described by rows in BathHeader
 * @property string|null $Value18 generic field described by rows in BathHeader
 * @property string|null $Value19 generic field described by rows in BathHeader
 * @property string|null $Value20 generic field described by rows in BathHeader
 * @property string $Tank
 * @property string|null $EmpCode Code of employee that recorded analysis record
 * @property \Illuminate\Support\Carbon $TimeStamp
 * @property int $DeleteVisible only true if record can be deleted
 * @property string $IDy
 * @property string|null $ActValue1
 * @property string|null $ActValue2
 * @property string|null $ActValue3
 * @property string|null $ActValue4
 * @property string|null $ActValue5
 * @property string|null $ActValue6
 * @property string|null $ActValue7
 * @property string|null $ActValue8
 * @property string|null $ActValue9
 * @property string|null $ActValue10
 * @property string|null $ActValue11
 * @property string|null $ActValue12
 * @property string|null $ActValue13
 * @property string|null $ActValue14
 * @property string|null $ActValue15
 * @property string|null $ActValue16
 * @property string|null $ActValue17
 * @property string|null $ActValue18
 * @property string|null $ActValue19
 * @property string|null $ActValue20
 * @property mixed $date
 * @property mixed $time_stamp
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis query()
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis whereActValue1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis whereActValue10($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis whereActValue11($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis whereActValue12($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis whereActValue13($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis whereActValue14($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis whereActValue15($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis whereActValue16($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis whereActValue17($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis whereActValue18($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis whereActValue19($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis whereActValue2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis whereActValue20($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis whereActValue3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis whereActValue4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis whereActValue5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis whereActValue6($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis whereActValue7($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis whereActValue8($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis whereActValue9($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis whereDeleteVisible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis whereEmpCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis whereFormName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis whereIDy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis whereRecordName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis whereTank($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis whereTimeStamp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis whereValue1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis whereValue10($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis whereValue11($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis whereValue12($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis whereValue13($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis whereValue14($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis whereValue15($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis whereValue16($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis whereValue17($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis whereValue18($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis whereValue19($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis whereValue2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis whereValue20($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis whereValue3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis whereValue4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis whereValue5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis whereValue6($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis whereValue7($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis whereValue8($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis whereValue9($value)
 * @mixin \Eloquent
 */
	class Analysis extends \Eloquent {}
}

namespace App\Models\Pacsys{
/**
 * App\Models\Pacsys\AnalysisNew
 *
 * @property int $ID
 * @property string|null $RecordName Identifies serialized tank
 * @property string|null $FormName Identifies type of process chemistry
 * @property \Illuminate\Support\Carbon $Date Identifies the process value being measured
 * @property string|null $Value1 generic field described by rows in BathHeader
 * @property string|null $Value2 generic field described by rows in BathHeader
 * @property string|null $Value3 generic field described by rows in BathHeader
 * @property string|null $Value4 generic field described by rows in BathHeader
 * @property string|null $Value5 generic field described by rows in BathHeader
 * @property string|null $Value6 generic field described by rows in BathHeader
 * @property string|null $Value7 generic field described by rows in BathHeader
 * @property string|null $Value8 generic field described by rows in BathHeader
 * @property string|null $Value9 generic field described by rows in BathHeader
 * @property string|null $Value10 generic field described by rows in BathHeader
 * @property string|null $Value11 generic field described by rows in BathHeader
 * @property string|null $Value12 generic field described by rows in BathHeader
 * @property string|null $Value13 generic field described by rows in BathHeader
 * @property string|null $Value14 generic field described by rows in BathHeader
 * @property string|null $Value15 generic field described by rows in BathHeader
 * @property string|null $Value16 generic field described by rows in BathHeader
 * @property string|null $Value17 generic field described by rows in BathHeader
 * @property string|null $Value18 generic field described by rows in BathHeader
 * @property string|null $Value19 generic field described by rows in BathHeader
 * @property string|null $Value20 generic field described by rows in BathHeader
 * @property string|null $Tank
 * @property string|null $EmpCode Code of employee that recorded analysis record
 * @property \Illuminate\Support\Carbon $TimeStamp
 * @property int|null $DeleteVisible Default value for Delete Visible value in Analysis records
 * @property string|null $Label
 * @property mixed $date
 * @property mixed $time_stamp
 * @method static \Illuminate\Database\Eloquent\Builder|AnalysisNew newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AnalysisNew newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AnalysisNew query()
 * @method static \Illuminate\Database\Eloquent\Builder|AnalysisNew whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnalysisNew whereDeleteVisible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnalysisNew whereEmpCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnalysisNew whereFormName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnalysisNew whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnalysisNew whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnalysisNew whereRecordName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnalysisNew whereTank($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnalysisNew whereTimeStamp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnalysisNew whereValue1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnalysisNew whereValue10($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnalysisNew whereValue11($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnalysisNew whereValue12($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnalysisNew whereValue13($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnalysisNew whereValue14($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnalysisNew whereValue15($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnalysisNew whereValue16($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnalysisNew whereValue17($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnalysisNew whereValue18($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnalysisNew whereValue19($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnalysisNew whereValue2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnalysisNew whereValue20($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnalysisNew whereValue3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnalysisNew whereValue4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnalysisNew whereValue5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnalysisNew whereValue6($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnalysisNew whereValue7($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnalysisNew whereValue8($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnalysisNew whereValue9($value)
 * @mixin \Eloquent
 */
	class AnalysisNew extends \Eloquent {}
}

namespace App\Models\Pacsys{
/**
 * App\Models\Pacsys\CalcValue
 *
 * @property int $ID
 * @property string|null $ValueName field name of value being described Value(1-20)
 * @property string|null $Description description of the value being described in this record
 * @property string|null $Formula Use '$n' for column values and double quotes around strings.
 * @property int $OrderCalc
 * @property string|null $FormName Form that calculated field is part of
 * @property int $DecimalPlaces Number of decimal places for result
 * @property \Illuminate\Support\Carbon $TimeStamp
 * @property mixed $time_stamp
 * @method static \Illuminate\Database\Eloquent\Builder|CalcValue newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CalcValue newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CalcValue query()
 * @method static \Illuminate\Database\Eloquent\Builder|CalcValue whereDecimalPlaces($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalcValue whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalcValue whereFormName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalcValue whereFormula($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalcValue whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalcValue whereOrderCalc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalcValue whereTimeStamp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalcValue whereValueName($value)
 * @mixin \Eloquent
 */
	class CalcValue extends \Eloquent {}
}

namespace App\Models\Pacsys{
/**
 * App\Models\Pacsys\Employee
 *
 * @property int $id
 * @property string|null $code
 * @property string|null $name
 * @property string|null $user_name
 * @property string $pin secret pin number for change, add and delete access
 * @property int $production
 * @property int $supervisor
 * @property \Illuminate\Support\Carbon $timestamp
 * @property mixed $time_stamp
 * @method static \Illuminate\Database\Eloquent\Builder|Employee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Employee newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Employee query()
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee wherePin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereProduction($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereSupervisor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereTimestamp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereUserName($value)
 * @mixin \Eloquent
 */
	class Employee extends \Eloquent {}
}

namespace App\Models\Pacsys{
/**
 * App\Models\Pacsys\Form
 *
 * @property int $ID
 * @property string|null $Name name used to associate recorded values and all bath value definitions
 * @property string|null $Description general description of bath
 * @property string|null $FormType grouping for organizing tank and bath combinations
 * @property \Illuminate\Support\Carbon $TimeStamp
 * @property int|null $Archived Indicates if form is archived.  New analysis can not  be added to archived forms.
 * @property string|null $Revision
 * @property string|null $AnalysisProcedure
 * @property mixed $time_stamp
 * @method static \Illuminate\Database\Eloquent\Builder|Form newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Form newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Form query()
 * @method static \Illuminate\Database\Eloquent\Builder|Form whereAnalysisProcedure($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Form whereArchived($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Form whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Form whereFormType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Form whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Form whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Form whereRevision($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Form whereTimeStamp($value)
 * @mixin \Eloquent
 */
	class Form extends \Eloquent {}
}

namespace App\Models\Pacsys{
/**
 * App\Models\Pacsys\FormType
 *
 * @property int $ID
 * @property string|null $FormType
 * @property string|null $Description
 * @property \Illuminate\Support\Carbon $TimeStamp
 * @property mixed $time_stamp
 * @method static \Illuminate\Database\Eloquent\Builder|FormType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FormType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FormType query()
 * @method static \Illuminate\Database\Eloquent\Builder|FormType whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormType whereFormType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormType whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormType whereTimeStamp($value)
 * @mixin \Eloquent
 */
	class FormType extends \Eloquent {}
}

namespace App\Models\Pacsys{
/**
 * App\Models\Pacsys\FormValueAction
 *
 * @property int $ID
 * @property string $Name
 * @property string|null $FormName name of bath being defined
 * @property int $Action1 boolean value, true is an action item, false is no action required
 * @property int $Action2 boolean value, ttrue is an action item, false is no action required
 * @property int $Action3 boolean value, ttrue is an action item, false is no action required
 * @property int $Action4 boolean value, true is an action item, false is no action required
 * @property int $Action5 boolean value, true is an action item, false is no action required
 * @property int $Action6 boolean value, true is an action item, false is no action required
 * @property int $Action7 boolean value, true is an action item, false is no action required
 * @property int $Action8 boolean value, true is an action item, false is no action required
 * @property int $Action9 boolean value, true is an action item, false is no action required
 * @property int $Action10 boolean value, true is an action item, false is no action required
 * @property int $Action11 boolean value, true is an action item, false is no action required
 * @property int $Action12 boolean value, true is an action item, false is no action required
 * @property int $Action13 boolean value, true is an action item, false is no action required
 * @property int $Action14 boolean value, true is an action item, false is no action required
 * @property int $Action15 boolean value, true is an action item, false is no action required
 * @property int $Action16 boolean value, true is an action item, false is no action required
 * @property int $Action17 boolean value, true is an action item, false is no action required
 * @property int $Action18 boolean value, true is an action item, false is no action required
 * @property int $Action19 boolean value, true is an action item, false is no action required
 * @property int $Action20 boolean value, true is an action item, false is no action required
 * @property int $Tank
 * @property \Illuminate\Support\Carbon $TimeStamp
 * @property mixed $time_stamp
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueAction newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueAction newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueAction query()
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueAction whereAction1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueAction whereAction10($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueAction whereAction11($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueAction whereAction12($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueAction whereAction13($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueAction whereAction14($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueAction whereAction15($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueAction whereAction16($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueAction whereAction17($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueAction whereAction18($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueAction whereAction19($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueAction whereAction2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueAction whereAction20($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueAction whereAction3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueAction whereAction4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueAction whereAction5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueAction whereAction6($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueAction whereAction7($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueAction whereAction8($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueAction whereAction9($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueAction whereFormName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueAction whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueAction whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueAction whereTank($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueAction whereTimeStamp($value)
 * @mixin \Eloquent
 */
	class FormValueAction extends \Eloquent {}
}

namespace App\Models\Pacsys{
/**
 * App\Models\Pacsys\FormValueName
 *
 * @property int $ID
 * @property string $Name
 * @property string|null $FormName name of bath this heading description row is associated with
 * @property string $Name1 text for name of column
 * @property string $Name2 text for name of column
 * @property string $Name3 text for name of column
 * @property string $Name4 text for name of column
 * @property string $Name5 text for name of column
 * @property string $Name6 text for name of column
 * @property string $Name7 text for name of column
 * @property string $Name8 text for name of column
 * @property string $Name9 text for name of column
 * @property string $Name10 text for name of column
 * @property string $Name11 text for name of column
 * @property string $Name12 text for name of column
 * @property string $Name13 text for name of column
 * @property string $Name14 text for name of column
 * @property string $Name15 text for name of column
 * @property string $Name16 text for name of column
 * @property string $Name17 text for name of column
 * @property string $Name18 text for name of column
 * @property string $Name19 text for name of column
 * @property string $Name20 text for name of column
 * @property string|null $Tank
 * @property \Illuminate\Support\Carbon $TimeStamp
 * @property string $Blank
 * @property mixed $time_stamp
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueName newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueName newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueName query()
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueName whereBlank($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueName whereFormName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueName whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueName whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueName whereName1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueName whereName10($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueName whereName11($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueName whereName12($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueName whereName13($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueName whereName14($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueName whereName15($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueName whereName16($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueName whereName17($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueName whereName18($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueName whereName19($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueName whereName2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueName whereName20($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueName whereName3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueName whereName4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueName whereName5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueName whereName6($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueName whereName7($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueName whereName8($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueName whereName9($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueName whereTank($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueName whereTimeStamp($value)
 * @mixin \Eloquent
 */
	class FormValueName extends \Eloquent {}
}

namespace App\Models\Pacsys{
/**
 * App\Models\Pacsys\FormValuePeriod
 *
 * @property int $ID
 * @property string $Name
 * @property string|null $FormName
 * @property string $Period1 text describing frequency or period that value is recorded
 * @property string $Period2 text describing frequency or period that value is recorded
 * @property string $Period3 text describing frequency or period that value is recorded
 * @property string $Period4 text describing frequency or period that value is recorded
 * @property string $Period5 text describing frequency or period that value is recorded
 * @property string $Period6 text describing frequency or period that value is recorded
 * @property string $Period7 text describing frequency or period that value is recorded
 * @property string $Period8 text describing frequency or period that value is recorded
 * @property string $Period9 text describing frequency or period that value is recorded
 * @property string $Period10 text describing frequency or period that value is recorded
 * @property string $Period11 text describing frequency or period that value is recorded
 * @property string $Period12 text describing frequency or period that value is recorded
 * @property string $Period13 text describing frequency or period that value is recorded
 * @property string $Period14 text describing frequency or period that value is recorded
 * @property string $Period15 text describing frequency or period that value is recorded
 * @property string $Period16 text describing frequency or period that value is recorded
 * @property string $Period17 text describing frequency or period that value is recorded
 * @property string $Period18 text describing frequency or period that value is recorded
 * @property string $Period19 text describing frequency or period that value is recorded
 * @property string $Period20 text describing frequency or period that value is recorded
 * @property string|null $Tank
 * @property \Illuminate\Support\Carbon $TimeStamp
 * @property mixed $time_stamp
 * @method static \Illuminate\Database\Eloquent\Builder|FormValuePeriod newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FormValuePeriod newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FormValuePeriod query()
 * @method static \Illuminate\Database\Eloquent\Builder|FormValuePeriod whereFormName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValuePeriod whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValuePeriod whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValuePeriod wherePeriod1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValuePeriod wherePeriod10($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValuePeriod wherePeriod11($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValuePeriod wherePeriod12($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValuePeriod wherePeriod13($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValuePeriod wherePeriod14($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValuePeriod wherePeriod15($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValuePeriod wherePeriod16($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValuePeriod wherePeriod17($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValuePeriod wherePeriod18($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValuePeriod wherePeriod19($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValuePeriod wherePeriod2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValuePeriod wherePeriod20($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValuePeriod wherePeriod3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValuePeriod wherePeriod4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValuePeriod wherePeriod5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValuePeriod wherePeriod6($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValuePeriod wherePeriod7($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValuePeriod wherePeriod8($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValuePeriod wherePeriod9($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValuePeriod whereTank($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValuePeriod whereTimeStamp($value)
 * @mixin \Eloquent
 */
	class FormValuePeriod extends \Eloquent {}
}

namespace App\Models\Pacsys{
/**
 * App\Models\Pacsys\FormValueRange
 *
 * @property int $ID
 * @property string $Name
 * @property string|null $FormName
 * @property string $min1 minimum value that should be expected for value recorded in this position
 * @property string $max1 maximum value that should be expected for value recorded in this position
 * @property string $min2 minimum value that should be expected for value recorded in this position
 * @property string $max2 maximum value that should be expected for value recorded in this position
 * @property string $min3 minimum value that should be expected for value recorded in this position
 * @property string $max3 maximum value that should be expected for value recorded in this position
 * @property string $min4 minimum value that should be expected for value recorded in this position
 * @property string $max4 maximum value that should be expected for value recorded in this position
 * @property string $min5 minimum value that should be expected for value recorded in this position
 * @property string $max5 maximum value that should be expected for value recorded in this position
 * @property string $min6 minimum value that should be expected for value recorded in this position
 * @property string $max6 maximum value that should be expected for value recorded in this position
 * @property string $min7 minimum value that should be expected for value recorded in this position
 * @property string $max7 maximum value that should be expected for value recorded in this position
 * @property string $min8 minimum value that should be expected for value recorded in this position
 * @property string $max8 maximum value that should be expected for value recorded in this position
 * @property string $min9 minimum value that should be expected for value recorded in this position
 * @property string $max9 maximum value that should be expected for value recorded in this position
 * @property string $min10 minimum value that should be expected for value recorded in this position
 * @property string $max10 maximum value that should be expected for value recorded in this position
 * @property string $min11 minimum value that should be expected for value recorded in this position
 * @property string $max11 maximum value that should be expected for value recorded in this position
 * @property string $min12 minimum value that should be expected for value recorded in this position
 * @property string $max12 maximum value that should be expected for value recorded in this position
 * @property string $min13 minimum value that should be expected for value recorded in this position
 * @property string $max13 maximum value that should be expected for value recorded in this position
 * @property string $min14 minimum value that should be expected for value recorded in this position
 * @property string $max14 maximum value that should be expected for value recorded in this position
 * @property string $min15 minimum value that should be expected for value recorded in this position
 * @property string $max15 maximum value that should be expected for value recorded in this position
 * @property string $min16 minimum value that should be expected for value recorded in this position
 * @property string $max16 maximum value that should be expected for value recorded in this position
 * @property string $min17 minimum value that should be expected for value recorded in this position
 * @property string $max17 maximum value that should be expected for value recorded in this position
 * @property string $min18 minimum value that should be expected for value recorded in this position
 * @property string $max18 maximum value that should be expected for value recorded in this position
 * @property string $min19 minimum value that should be expected for value recorded in this position
 * @property string $max19 maximum value that should be expected for value recorded in this position
 * @property string $min20 minimum value that should be expected for value recorded in this position
 * @property string $max20 maximum value that should be expected for value recorded in this position
 * @property string|null $Tank
 * @property \Illuminate\Support\Carbon $TimeStamp
 * @property mixed $time_stamp
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueRange newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueRange newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueRange query()
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueRange whereFormName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueRange whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueRange whereMax1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueRange whereMax10($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueRange whereMax11($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueRange whereMax12($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueRange whereMax13($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueRange whereMax14($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueRange whereMax15($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueRange whereMax16($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueRange whereMax17($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueRange whereMax18($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueRange whereMax19($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueRange whereMax2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueRange whereMax20($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueRange whereMax3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueRange whereMax4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueRange whereMax5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueRange whereMax6($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueRange whereMax7($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueRange whereMax8($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueRange whereMax9($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueRange whereMin1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueRange whereMin10($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueRange whereMin11($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueRange whereMin12($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueRange whereMin13($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueRange whereMin14($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueRange whereMin15($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueRange whereMin16($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueRange whereMin17($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueRange whereMin18($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueRange whereMin19($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueRange whereMin2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueRange whereMin20($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueRange whereMin3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueRange whereMin4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueRange whereMin5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueRange whereMin6($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueRange whereMin7($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueRange whereMin8($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueRange whereMin9($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueRange whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueRange whereTank($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueRange whereTimeStamp($value)
 * @mixin \Eloquent
 */
	class FormValueRange extends \Eloquent {}
}

namespace App\Models\Pacsys{
/**
 * App\Models\Pacsys\FormValueType
 *
 * @property mixed $timestamp
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueType query()
 * @mixin \Eloquent
 */
	class FormValueType extends \Eloquent {}
}

namespace App\Models\Pacsys{
/**
 * App\Models\Pacsys\FormValueUnit
 *
 * @property int $ID
 * @property string $Name
 * @property string|null $FormName
 * @property string|null $unit1 text describing units that this value is represented in
 * @property string|null $unit2 text describing units that this value is represented in
 * @property string|null $unit3 text describing units that this value is represented in
 * @property string|null $unit4 text describing units that this value is represented in
 * @property string|null $unit5 text describing units that this value is represented in
 * @property string|null $unit6 text describing units that this value is represented in
 * @property string|null $unit7 text describing units that this value is represented in
 * @property string|null $unit8 text describing units that this value is represented in
 * @property string|null $unit9 text describing units that this value is represented in
 * @property string|null $unit10 text describing units that this value is represented in
 * @property string|null $unit11 text describing units that this value is represented in
 * @property string|null $unit12 text describing units that this value is represented in
 * @property string|null $unit13 text describing units that this value is represented in
 * @property string|null $unit14 text describing units that this value is represented in
 * @property string|null $unit15 text describing units that this value is represented in
 * @property string|null $unit16 text describing units that this value is represented in
 * @property string|null $unit17 text describing units that this value is represented in
 * @property string|null $unit18 text describing units that this value is represented in
 * @property string|null $unit19 text describing units that this value is represented in
 * @property string|null $unit20 text describing units that this value is represented in
 * @property string $Tank
 * @property \Illuminate\Support\Carbon $TimeStamp
 * @property mixed $timestamp
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueUnit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueUnit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueUnit query()
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueUnit whereFormName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueUnit whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueUnit whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueUnit whereTank($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueUnit whereTimeStamp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueUnit whereUnit1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueUnit whereUnit10($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueUnit whereUnit11($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueUnit whereUnit12($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueUnit whereUnit13($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueUnit whereUnit14($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueUnit whereUnit15($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueUnit whereUnit16($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueUnit whereUnit17($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueUnit whereUnit18($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueUnit whereUnit19($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueUnit whereUnit2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueUnit whereUnit20($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueUnit whereUnit3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueUnit whereUnit4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueUnit whereUnit5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueUnit whereUnit6($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueUnit whereUnit7($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueUnit whereUnit8($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueUnit whereUnit9($value)
 * @mixin \Eloquent
 */
	class FormValueUnit extends \Eloquent {}
}

namespace App\Models\Pacsys{
/**
 * App\Models\Pacsys\FormValueVisible
 *
 * @property int $ID
 * @property string $Name
 * @property string|null $FormName name of bath being defined
 * @property int $Visible1 boolean value, true is displayed, false is hidden
 * @property int $Visible2 boolean value, true is displayed, false is hidden
 * @property int $Visible3 boolean value, true is displayed, false is hidden
 * @property int $Visible4 boolean value, true is displayed, false is hidden
 * @property int $Visible5 boolean value, true is displayed, false is hidden
 * @property int $Visible6 boolean value, true is displayed, false is hidden
 * @property int $Visible7 boolean value, true is displayed, false is hidden
 * @property int $Visible8 boolean value, true is displayed, false is hidden
 * @property int $Visible9 boolean value, true is displayed, false is hidden
 * @property int $Visible10 boolean value, true is displayed, false is hidden
 * @property int $Visible11 boolean value, true is displayed, false is hidden
 * @property int $Visible12 boolean value, true is displayed, false is hidden
 * @property int $Visible13 boolean value, true is displayed, false is hidden
 * @property int $Visible14 boolean value, true is displayed, false is hidden
 * @property int $Visible15 boolean value, true is displayed, false is hidden
 * @property int $Visible16 boolean value, true is displayed, false is hidden
 * @property int $Visible17 boolean value, true is displayed, false is hidden
 * @property int $Visible18 boolean value, true is displayed, false is hidden
 * @property int $Visible19 boolean value, true is displayed, false is hidden
 * @property int $Visible20 boolean value, true is displayed, false is hidden
 * @property int $Tank
 * @property \Illuminate\Support\Carbon $TimeStamp
 * @property mixed $timestamp
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueVisible newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueVisible newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueVisible query()
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueVisible whereFormName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueVisible whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueVisible whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueVisible whereTank($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueVisible whereTimeStamp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueVisible whereVisible1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueVisible whereVisible10($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueVisible whereVisible11($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueVisible whereVisible12($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueVisible whereVisible13($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueVisible whereVisible14($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueVisible whereVisible15($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueVisible whereVisible16($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueVisible whereVisible17($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueVisible whereVisible18($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueVisible whereVisible19($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueVisible whereVisible2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueVisible whereVisible20($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueVisible whereVisible3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueVisible whereVisible4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueVisible whereVisible5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueVisible whereVisible6($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueVisible whereVisible7($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueVisible whereVisible8($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormValueVisible whereVisible9($value)
 * @mixin \Eloquent
 */
	class FormValueVisible extends \Eloquent {}
}

namespace App\Models\Pacsys{
/**
 * App\Models\Pacsys\Month
 *
 * @property string $MonthNumber
 * @property string $MonthName
 * @method static \Illuminate\Database\Eloquent\Builder|Month newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Month newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Month query()
 * @method static \Illuminate\Database\Eloquent\Builder|Month whereMonthName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Month whereMonthNumber($value)
 * @mixin \Eloquent
 */
	class Month extends \Eloquent {}
}

namespace App\Models\Pacsys{
/**
 * App\Models\Pacsys\Period
 *
 * @property int $ID
 * @property string|null $Period Unit
 * @property string|null $Description Unit description shown in select boxes
 * @method static \Illuminate\Database\Eloquent\Builder|Period newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Period newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Period query()
 * @method static \Illuminate\Database\Eloquent\Builder|Period whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Period whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Period wherePeriod($value)
 * @mixin \Eloquent
 */
	class Period extends \Eloquent {}
}

namespace App\Models\Pacsys{
/**
 * App\Models\Pacsys\Record
 *
 * @property int $ID
 * @property string|null $Name
 * @property string|null $Description
 * @property string|null $FormName last form name/default form for this record
 * @property string|null $FormType grouping of possible forms for this record
 * @property string|null $ScopeName scope of the records
 * @property int $ImageID
 * @property \Illuminate\Support\Carbon $TimeStamp
 * @property int $CapacityOld Capacity in gallons
 * @property float|null $Capacity
 * @property string $CapacityUnit
 * @property mixed $time_stamp
 * @method static \Illuminate\Database\Eloquent\Builder|Record newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Record newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Record query()
 * @method static \Illuminate\Database\Eloquent\Builder|Record whereCapacity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Record whereCapacityOld($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Record whereCapacityUnit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Record whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Record whereFormName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Record whereFormType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Record whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Record whereImageID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Record whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Record whereScopeName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Record whereTimeStamp($value)
 * @mixin \Eloquent
 */
	class Record extends \Eloquent {}
}

namespace App\Models\Pacsys{
/**
 * App\Models\Pacsys\Scope
 *
 * @property int $ID
 * @property string|null $Name
 * @property string|null $Description
 * @property \Illuminate\Support\Carbon $TimeStamp
 * @property mixed $time_stamp
 * @method static \Illuminate\Database\Eloquent\Builder|Scope newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Scope newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Scope query()
 * @method static \Illuminate\Database\Eloquent\Builder|Scope whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Scope whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Scope whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Scope whereTimeStamp($value)
 * @mixin \Eloquent
 */
	class Scope extends \Eloquent {}
}

namespace App\Models\Pacsys{
/**
 * App\Models\Pacsys\Security
 *
 * @property int $ID
 * @property string|null $EmpCode code for empolyee
 * @property string|null $Scope scope employee can change information for
 * @property \Illuminate\Support\Carbon $TimeStamp
 * @property mixed $time_stamp
 * @method static \Illuminate\Database\Eloquent\Builder|Security newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Security newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Security query()
 * @method static \Illuminate\Database\Eloquent\Builder|Security whereEmpCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Security whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Security whereScope($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Security whereTimeStamp($value)
 * @mixin \Eloquent
 */
	class Security extends \Eloquent {}
}

namespace App\Models\Pacsys{
/**
 * App\Models\Pacsys\Unit
 *
 * @property int $ID
 * @property string|null $Unit Unit
 * @property string|null $Description Unit description shown in select boxes
 * @method static \Illuminate\Database\Eloquent\Builder|Unit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Unit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Unit query()
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereUnit($value)
 * @mixin \Eloquent
 */
	class Unit extends \Eloquent {}
}

namespace App\Models\Pacsys{
/**
 * App\Models\Pacsys\Validation
 *
 * @property int $ID
 * @property string|null $ValidationText
 * @method static \Illuminate\Database\Eloquent\Builder|Validation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Validation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Validation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Validation whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Validation whereValidationText($value)
 * @mixin \Eloquent
 */
	class Validation extends \Eloquent {}
}

namespace App\Models\Pacsys{
/**
 * App\Models\Pacsys\Year
 *
 * @property int $Year
 * @method static \Illuminate\Database\Eloquent\Builder|Year newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Year newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Year query()
 * @method static \Illuminate\Database\Eloquent\Builder|Year whereYear($value)
 * @mixin \Eloquent
 */
	class Year extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Permission
 *
 * @property int $id
 * @property string $title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Permission newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission query()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Permission extends \Eloquent {}
}

namespace App\Models\ProcessData{
/**
 * App\Models\ProcessData\Amp
 *
 * @property int $id
 * @property int $record_id
 * @property int $amp
 * @property int $amp_minute
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\ProcessData\Record|null $record
 * @method static \Illuminate\Database\Eloquent\Builder|Amp newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Amp newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Amp query()
 * @method static \Illuminate\Database\Eloquent\Builder|Amp whereAmp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Amp whereAmpMinute($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Amp whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Amp whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Amp whereRecordId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Amp whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Amp extends \Eloquent {}
}

namespace App\Models\ProcessData{
/**
 * App\Models\ProcessData\Logger
 *
 * @property int $id
 * @property int $active
 * @property string|null $name
 * @property string|null $description
 * @property int|null $logger_type_id
 * @property string|null $ip_address
 * @property int|null $port
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\ProcessData\LoggerType|null $logger_type
 * @method static \Illuminate\Database\Eloquent\Builder|Logger newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Logger newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Logger query()
 * @method static \Illuminate\Database\Eloquent\Builder|Logger whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Logger whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Logger whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Logger whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Logger whereIpAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Logger whereLoggerTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Logger whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Logger wherePort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Logger whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Logger extends \Eloquent {}
}

namespace App\Models\ProcessData{
/**
 * App\Models\ProcessData\LoggerType
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|LoggerType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LoggerType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LoggerType query()
 * @method static \Illuminate\Database\Eloquent\Builder|LoggerType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LoggerType whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LoggerType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LoggerType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LoggerType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class LoggerType extends \Eloquent {}
}

namespace App\Models\ProcessData{
/**
 * App\Models\ProcessData\Record
 *
 * @property int $id
 * @property int|null $active
 * @property string|null $name
 * @property int $logger_id
 * @property int $record_type_id
 * @property string|null $command command to send to logger to retrieve information from a port
 * @property float $multiplier for example, to convert millivolts to amps.
 * @property string|null $description
 * @property int|null $unit_id
 * @property int|null $graph_y_lower
 * @property int|null $graph_y_upper
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\ProcessData\Logger|null $logger
 * @property-read \App\Models\ProcessData\RecordType|null $record_type
 * @property-read \App\Models\ProcessData\Unit|null $unit
 * @method static \Illuminate\Database\Eloquent\Builder|Record newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Record newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Record query()
 * @method static \Illuminate\Database\Eloquent\Builder|Record whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Record whereCommand($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Record whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Record whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Record whereGraphYLower($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Record whereGraphYUpper($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Record whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Record whereLoggerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Record whereMultiplier($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Record whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Record whereRecordTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Record whereUnitId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Record whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Record extends \Eloquent {}
}

namespace App\Models\ProcessData{
/**
 * App\Models\ProcessData\RecordType
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $description
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|RecordType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RecordType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RecordType query()
 * @method static \Illuminate\Database\Eloquent\Builder|RecordType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecordType whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecordType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecordType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecordType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class RecordType extends \Eloquent {}
}

namespace App\Models\ProcessData{
/**
 * App\Models\ProcessData\Temperature
 *
 * @property-read \App\Models\ProcessData\Record|null $record
 * @method static \Illuminate\Database\Eloquent\Builder|Temperature newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Temperature newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Temperature query()
 * @mixin \Eloquent
 */
	class Temperature extends \Eloquent {}
}

namespace App\Models\ProcessData{
/**
 * App\Models\ProcessData\Unit
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Unit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Unit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Unit query()
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Unit extends \Eloquent {}
}

namespace App\Models\ProcessData{
/**
 * App\Models\ProcessData\Volt
 *
 * @property int $id
 * @property int $record_id
 * @property string $volt
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Record|null $record
 * @method static \Illuminate\Database\Eloquent\Builder|Volt newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Volt newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Volt query()
 * @method static \Illuminate\Database\Eloquent\Builder|Volt whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Volt whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Volt whereRecordId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Volt whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Volt whereVolt($value)
 * @mixin \Eloquent
 */
	class Volt extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Role
 *
 * @property int $id
 * @property string $title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @method static \Illuminate\Database\Eloquent\Builder|Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role query()
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Role extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string|null $remember_token
 * @property string|null $text
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class User extends \Eloquent {}
}

namespace App\Models\Wipsys{
/**
 * App\Models\Wipsys\Carrier
 *
 * @property string|null $code
 * @property string|null $name
 * @property string|null $physical_address
 * @property string|null $address_extension
 * @property string|null $payment_address
 * @property string|null $city
 * @property string|null $state
 * @property string|null $zip
 * @property string|null $email
 * @property string|null $company_phone
 * @property string|null $fax
 * @property string|null $note
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $archive
 * @property int|null $revision
 * @method static \Illuminate\Database\Eloquent\Builder|Carrier newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Carrier newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Carrier query()
 * @method static \Illuminate\Database\Eloquent\Builder|Carrier whereAddressExtension($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carrier whereArchive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carrier whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carrier whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carrier whereCompanyPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carrier whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carrier whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carrier whereFax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carrier whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carrier whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carrier whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carrier wherePaymentAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carrier wherePhysicalAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carrier whereRevision($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carrier whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carrier whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carrier whereZip($value)
 * @mixin \Eloquent
 */
	class Carrier extends \Eloquent {}
}

namespace App\Models\Wipsys{
/**
 * App\Models\Wipsys\Contact
 *
 * @property int $id
 * @property string|null $customer_code
 * @property int|null $customer_id
 * @property string|null $customer_name
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $phone
 * @property string|null $extension
 * @property string|null $email
 * @property string|null $quote_emails
 * @property int|null $email_quote_print
 * @property string|null $cell
 * @property string|null $fax
 * @property int|null $archive
 * @property int|null $revision
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Wipsys\Customer|null $customer
 * @method static \Illuminate\Database\Eloquent\Builder|Contact newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact newQuery()
 * @method static \Illuminate\Database\Query\Builder|Contact onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact query()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereArchive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereCell($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereCustomerCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereCustomerName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereEmailQuotePrint($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereExtension($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereFax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereQuoteEmails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereRevision($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Contact withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Contact withoutTrashed()
 * @mixin \Eloquent
 */
	class Contact extends \Eloquent {}
}

namespace App\Models\Wipsys{
/**
 * App\Models\Wipsys\Customer
 *
 * @property string|null $code
 * @property string|null $name
 * @property string|null $physical_address
 * @property string|null $address_extension
 * @property string|null $city
 * @property string|null $state
 * @property string|null $zip
 * @property string|null $destination_code
 * @property int $packing_list_copies
 * @property int|null $carrier_id
 * @property string|null $carrier_code
 * @property string|null $CONTACT1
 * @property string|null $company_phone
 * @property string|null $EXTENSION1
 * @property string|null $CONTACT2
 * @property string|null $PHONE2
 * @property string|null $EXTENSION2
 * @property string|null $fax
 * @property string|null $email
 * @property string|null $invoice_emails
 * @property int|null $cod
 * @property int|null $minimum_line_charge_by_order
 * @property int|null $minimum_line_charge_by_day
 * @property string|null $tax_id
 * @property string|null $note
 * @property int $id
 * @property string|null $billing_address
 * @property string|null $billing_city
 * @property string|null $billing_state
 * @property string|null $billing_zip
 * @property string|null $billing_phone
 * @property string|null $billing_fax
 * @property string|null $billing_email
 * @property int|null $ship_to_address_id
 * @property string|null $ship_to_address_code
 * @property string|null $ship_to_address
 * @property string|null $ship_to_city
 * @property string|null $ship_to_state
 * @property string|null $ship_to_zip
 * @property string|null $ship_to_phone
 * @property string|null $ship_to_fax
 * @property string|null $ship_to_email
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property int $archive
 * @property int|null $revision
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Wipsys\Destination[] $customerCodeDestinations
 * @property-read int|null $customer_code_destinations_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Wipsys\Contact[] $customerContacts
 * @property-read int|null $customer_contacts_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Wipsys\Quote[] $customerQuotes
 * @property-read int|null $customer_quotes_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Wipsys\Workorder[] $customerWorkorders
 * @property-read int|null $customer_workorders_count
 * @method static \Illuminate\Database\Eloquent\Builder|Customer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereAddressExtension($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereArchive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereBillingAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereBillingCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereBillingEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereBillingFax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereBillingPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereBillingState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereBillingZip($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereCONTACT1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereCONTACT2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereCarrierCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereCarrierId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereCod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereCompanyPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereDestinationCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereEXTENSION1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereEXTENSION2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereFax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereInvoiceEmails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereMinimumLineChargeByDay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereMinimumLineChargeByOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer wherePHONE2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer wherePackingListCopies($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer wherePhysicalAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereRevision($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereShipToAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereShipToAddressCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereShipToAddressId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereShipToCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereShipToEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereShipToFax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereShipToPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereShipToState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereShipToZip($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereTaxId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereZip($value)
 * @mixin \Eloquent
 */
	class Customer extends \Eloquent {}
}

namespace App\Models\Wipsys{
/**
 * App\Models\Wipsys\Destination
 *
 * @property string|null $code
 * @property string|null $name
 * @property string|null $physical_address
 * @property string|null $address_extension
 * @property string|null $city
 * @property string|null $state
 * @property string|null $zip
 * @property \App\Models\Wipsys\Customer|null $customer_code
 * @property string|null $CONTACT1
 * @property string|null $company_phone
 * @property string|null $PHONE1
 * @property string|null $EXTENSION1
 * @property string|null $CONTACT2
 * @property string|null $PHONE2
 * @property string|null $EXTENSION2
 * @property string|null $fax
 * @property string|null $email
 * @property string|null $note
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $archive
 * @property int|null $revision
 * @method static \Illuminate\Database\Eloquent\Builder|Destination newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Destination newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Destination query()
 * @method static \Illuminate\Database\Eloquent\Builder|Destination whereAddressExtension($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Destination whereArchive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Destination whereCONTACT1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Destination whereCONTACT2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Destination whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Destination whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Destination whereCompanyPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Destination whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Destination whereCustomerCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Destination whereEXTENSION1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Destination whereEXTENSION2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Destination whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Destination whereFax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Destination whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Destination whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Destination whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Destination wherePHONE1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Destination wherePHONE2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Destination wherePhysicalAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Destination whereRevision($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Destination whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Destination whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Destination whereZip($value)
 * @mixin \Eloquent
 */
	class Destination extends \Eloquent {}
}

namespace App\Models\Wipsys{
/**
 * App\Models\Wipsys\Employee
 *
 * @property string|null $code
 * @property string|null $name
 * @property mixed|null $signature
 * @property string $pin
 * @property int $production
 * @property int $supervisor
 * @property string|null $note
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $archive
 * @property int|null $revision
 * @method static \Illuminate\Database\Eloquent\Builder|Employee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Employee newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Employee query()
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereArchive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee wherePin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereProduction($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereRevision($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereSignature($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereSupervisor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Employee extends \Eloquent {}
}

namespace App\Models\Wipsys{
/**
 * App\Models\Wipsys\Equipment
 *
 * @property string|null $code
 * @property string $description
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $archive
 * @property int|null $revision
 * @method static \Illuminate\Database\Eloquent\Builder|Equipment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Equipment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Equipment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Equipment whereArchive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Equipment whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Equipment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Equipment whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Equipment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Equipment whereRevision($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Equipment whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Equipment extends \Eloquent {}
}

namespace App\Models\Wipsys{
/**
 * App\Models\Wipsys\Freight
 *
 * @property string|null $code
 * @property string $name
 * @property string $description
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $archive
 * @property int|null $revision
 * @method static \Illuminate\Database\Eloquent\Builder|Freight newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Freight newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Freight query()
 * @method static \Illuminate\Database\Eloquent\Builder|Freight whereArchive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Freight whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Freight whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Freight whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Freight whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Freight whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Freight whereRevision($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Freight whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Freight extends \Eloquent {}
}

namespace App\Models\Wipsys{
/**
 * App\Models\Wipsys\Invoice
 *
 * @property int|null $number
 * @property string|null $customer_code
 * @property string|null $customer_purchase_order
 * @property \Illuminate\Support\Carbon|null $date
 * @property string|null $note
 * @property string|null $emails
 * @property int $id
 * @property int|null $printed
 * @property string|null $session_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $archive
 * @property int $revision
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice query()
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereArchive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereCustomerCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereCustomerPurchaseOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereEmails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice wherePrinted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereRevision($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereSessionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Invoice extends \Eloquent {}
}

namespace App\Models\Wipsys{
/**
 * App\Models\Wipsys\LaborCard
 *
 * @property int|null $work_order_number
 * @property string|null $employee_code
 * @property string|null $step_code
 * @property \Illuminate\Support\Carbon|null $job_date
 * @property \Illuminate\Support\Carbon|null $time_of_day
 * @property string|null $actual_hours
 * @property string $man_hours
 * @property string|null $actual_pieces
 * @property string|null $equipment_code
 * @property string|null $equipment_quantity
 * @property string|null $loads
 * @property string|null $cycle_time
 * @property \Illuminate\Support\Carbon|null $time_finished
 * @property int $id
 * @property string|null $session_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $archive
 * @property int|null $revision
 * @property-read Workorder|null $workorder
 * @method static \Illuminate\Database\Eloquent\Builder|LaborCard newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LaborCard newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LaborCard query()
 * @method static \Illuminate\Database\Eloquent\Builder|LaborCard whereActualHours($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LaborCard whereActualPieces($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LaborCard whereArchive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LaborCard whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LaborCard whereCycleTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LaborCard whereEmployeeCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LaborCard whereEquipmentCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LaborCard whereEquipmentQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LaborCard whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LaborCard whereJobDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LaborCard whereLoads($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LaborCard whereManHours($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LaborCard whereRevision($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LaborCard whereSessionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LaborCard whereStepCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LaborCard whereTimeFinished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LaborCard whereTimeOfDay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LaborCard whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LaborCard whereWorkOrderNumber($value)
 * @mixin \Eloquent
 */
	class LaborCard extends \Eloquent {}
}

namespace App\Models\Wipsys{
/**
 * App\Models\Wipsys\Log
 *
 * @property int $id
 * @property string $session_id
 * @property string|null $key_strokes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $revision
 * @method static \Illuminate\Database\Eloquent\Builder|Log newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Log newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Log query()
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereKeyStrokes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereRevision($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereSessionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Log extends \Eloquent {}
}

namespace App\Models\Wipsys{
/**
 * App\Models\Wipsys\Material
 *
 * @property string|null $name
 * @property string|null $description
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $archive
 * @property int|null $revision
 * @method static \Illuminate\Database\Eloquent\Builder|Material newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Material newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Material query()
 * @method static \Illuminate\Database\Eloquent\Builder|Material whereArchive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Material whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Material whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Material whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Material whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Material whereRevision($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Material whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Material extends \Eloquent {}
}

namespace App\Models\Wipsys{
/**
 * App\Models\Wipsys\Method
 *
 * @property string $code
 * @property string $name
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $archive
 * @property int|null $revision
 * @method static \Illuminate\Database\Eloquent\Builder|Method newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Method newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Method query()
 * @method static \Illuminate\Database\Eloquent\Builder|Method whereArchive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Method whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Method whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Method whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Method whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Method whereRevision($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Method whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Method extends \Eloquent {}
}

namespace App\Models\Wipsys{
/**
 * App\Models\Wipsys\PackingList
 *
 * @property int|null $number
 * @property \Illuminate\Support\Carbon|null $date
 * @property string|null $employee_code
 * @property string|null $user_code
 * @property string|null $customer_code
 * @property string|null $destination_code
 * @property string|null $carrier_code
 * @property string|null $freight_code
 * @property string|null $customer_purchase_order
 * @property int $cod
 * @property \Illuminate\Support\Carbon|null $date_received
 * @property int $id
 * @property int|null $printed
 * @property string|null $session_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $archive
 * @property int $revision
 * @method static \Illuminate\Database\Eloquent\Builder|PackingList newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PackingList newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PackingList query()
 * @method static \Illuminate\Database\Eloquent\Builder|PackingList whereArchive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackingList whereCarrierCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackingList whereCod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackingList whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackingList whereCustomerCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackingList whereCustomerPurchaseOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackingList whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackingList whereDateReceived($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackingList whereDestinationCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackingList whereEmployeeCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackingList whereFreightCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackingList whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackingList whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackingList wherePrinted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackingList whereRevision($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackingList whereSessionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackingList whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackingList whereUserCode($value)
 * @mixin \Eloquent
 */
	class PackingList extends \Eloquent {}
}

namespace App\Models\Wipsys{
/**
 * App\Models\Wipsys\PackingListsDetail
 *
 * @property int $packing_list_number
 * @property int $tag_number
 * @property int $work_order_number
 * @property int|null $part_id
 * @property string|null $part_number
 * @property string|null $customer_code
 * @property string|null $destination_code
 * @property string|null $process_code
 * @property string|null $method_code
 * @property string|null $customer_packing_list
 * @property string|null $customer_purchase_order
 * @property int|null $certification_number
 * @property int|null $certify
 * @property string|null $tag_quantity
 * @property string|null $tag_quantity_shipped
 * @property string|null $quantity
 * @property string|null $shipped_amount
 * @property \Illuminate\Support\Carbon|null $packing_list_date
 * @property \Illuminate\Support\Carbon|null $date_received
 * @property int $id
 * @property string|null $session_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $archive
 * @property int $revision
 * @method static \Illuminate\Database\Eloquent\Builder|PackingListsDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PackingListsDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PackingListsDetail query()
 * @method static \Illuminate\Database\Eloquent\Builder|PackingListsDetail whereArchive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackingListsDetail whereCertificationNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackingListsDetail whereCertify($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackingListsDetail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackingListsDetail whereCustomerCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackingListsDetail whereCustomerPackingList($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackingListsDetail whereCustomerPurchaseOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackingListsDetail whereDateReceived($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackingListsDetail whereDestinationCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackingListsDetail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackingListsDetail whereMethodCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackingListsDetail wherePackingListDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackingListsDetail wherePackingListNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackingListsDetail wherePartId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackingListsDetail wherePartNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackingListsDetail whereProcessCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackingListsDetail whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackingListsDetail whereRevision($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackingListsDetail whereSessionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackingListsDetail whereShippedAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackingListsDetail whereTagNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackingListsDetail whereTagQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackingListsDetail whereTagQuantityShipped($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackingListsDetail whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackingListsDetail whereWorkOrderNumber($value)
 * @mixin \Eloquent
 */
	class PackingListsDetail extends \Eloquent {}
}

namespace App\Models\Wipsys{
/**
 * App\Models\Wipsys\Part
 *
 * @property int $id
 * @property string|null $number
 * @property string|null $revision_code
 * @property string|null $description
 * @property string|null $customer_code
 * @property string|null $customer_name
 * @property string|null $process_code
 * @property string|null $method_code
 * @property string|null $price
 * @property string|null $price_code
 * @property string|null $price_break
 * @property string|null $quantity_price_break
 * @property string|null $unit_code
 * @property string|null $minimum_lot_charge
 * @property string|null $minimum_line_charge
 * @property int|null $quote_id
 * @property int $certify
 * @property string|null $specification
 * @property int $bake
 * @property string|null $baking_time_pre
 * @property string|null $baking_temp_pre
 * @property string|null $baking_time_post
 * @property string|null $baking_temp_post
 * @property string|null $procedure_code
 * @property string|null $material
 * @property string|null $material_name
 * @property string|null $material_condition
 * @property string|null $thickness_minimum
 * @property string|null $thickness_maximum
 * @property string|null $thickness_unit_code
 * @property string|null $surface_area
 * @property string|null $surface_area_unit_code
 * @property string|null $weight
 * @property string|null $weight_unit_code
 * @property string|null $length
 * @property string|null $width
 * @property string|null $height
 * @property string|null $dimension_unit_code
 * @property float|null $material_thickness
 * @property string|null $material_thickness_unit_code
 * @property string|null $note
 * @property string|null $special_requirement
 * @property string|null $operator_note
 * @property int|null $quality_check_1
 * @property int|null $quality_check_2
 * @property int|null $quality_check_3
 * @property int|null $quality_check_4
 * @property int|null $quality_check_5
 * @property int|null $quality_check_6
 * @property int|null $image_count
 * @property string|null $session_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $archive
 * @property int $revision
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Wipsys\Workorderhistory[] $partWorkorderhistories
 * @property-read int|null $part_workorderhistories_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Wipsys\Workorder[] $partWorkorders
 * @property-read int|null $part_workorders_count
 * @method static \Illuminate\Database\Eloquent\Builder|Part newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Part newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Part query()
 * @method static \Illuminate\Database\Eloquent\Builder|Part whereArchive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Part whereBake($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Part whereBakingTempPost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Part whereBakingTempPre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Part whereBakingTimePost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Part whereBakingTimePre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Part whereCertify($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Part whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Part whereCustomerCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Part whereCustomerName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Part whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Part whereDimensionUnitCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Part whereHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Part whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Part whereImageCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Part whereLength($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Part whereMaterial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Part whereMaterialCondition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Part whereMaterialName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Part whereMaterialThickness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Part whereMaterialThicknessUnitCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Part whereMethodCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Part whereMinimumLineCharge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Part whereMinimumLotCharge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Part whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Part whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Part whereOperatorNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Part wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Part wherePriceBreak($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Part wherePriceCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Part whereProcedureCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Part whereProcessCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Part whereQualityCheck1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Part whereQualityCheck2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Part whereQualityCheck3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Part whereQualityCheck4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Part whereQualityCheck5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Part whereQualityCheck6($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Part whereQuantityPriceBreak($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Part whereQuoteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Part whereRevision($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Part whereRevisionCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Part whereSessionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Part whereSpecialRequirement($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Part whereSpecification($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Part whereSurfaceArea($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Part whereSurfaceAreaUnitCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Part whereThicknessMaximum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Part whereThicknessMinimum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Part whereThicknessUnitCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Part whereUnitCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Part whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Part whereWeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Part whereWeightUnitCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Part whereWidth($value)
 * @mixin \Eloquent
 */
	class Part extends \Eloquent {}
}

namespace App\Models\Wipsys{
/**
 * App\Models\Wipsys\PartsBackup
 *
 * @property int $id
 * @property string|null $number
 * @property string|null $revision_code
 * @property string|null $description
 * @property string|null $customer_code
 * @property string|null $customer_name
 * @property string|null $process_code
 * @property string|null $method_code
 * @property string|null $price
 * @property string|null $price_code
 * @property string|null $price_break
 * @property string|null $quantity_price_break
 * @property string|null $unit_code
 * @property string|null $minimum_lot_charge
 * @property string|null $minimum_line_charge
 * @property int|null $quote_id
 * @property int $certify
 * @property string|null $specification
 * @property int $bake
 * @property string|null $baking_time_pre
 * @property string|null $baking_temp_pre
 * @property string|null $baking_time_post
 * @property string|null $baking_temp_post
 * @property string|null $procedure_code
 * @property string|null $material
 * @property string|null $material_name
 * @property string|null $material_condition
 * @property string|null $thickness_minimum
 * @property string|null $thickness_maximum
 * @property string|null $thickness_unit_code
 * @property string|null $surface_area
 * @property string|null $surface_area_unit_code
 * @property string|null $weight
 * @property string|null $weight_unit_code
 * @property string|null $length
 * @property string|null $width
 * @property string|null $height
 * @property string|null $dimension_unit_code
 * @property float|null $material_thickness
 * @property string|null $material_thickness_unit_code
 * @property string|null $note
 * @property string|null $special_requirement
 * @property string|null $operator_note
 * @property int|null $quality_check_1
 * @property int|null $quality_check_2
 * @property int|null $quality_check_3
 * @property int|null $quality_check_4
 * @property int|null $quality_check_5
 * @property int|null $quality_check_6
 * @property int|null $image_count
 * @property string|null $session_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $archive
 * @property int $revision
 * @method static \Illuminate\Database\Eloquent\Builder|PartsBackup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PartsBackup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PartsBackup query()
 * @method static \Illuminate\Database\Eloquent\Builder|PartsBackup whereArchive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartsBackup whereBake($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartsBackup whereBakingTempPost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartsBackup whereBakingTempPre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartsBackup whereBakingTimePost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartsBackup whereBakingTimePre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartsBackup whereCertify($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartsBackup whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartsBackup whereCustomerCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartsBackup whereCustomerName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartsBackup whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartsBackup whereDimensionUnitCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartsBackup whereHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartsBackup whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartsBackup whereImageCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartsBackup whereLength($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartsBackup whereMaterial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartsBackup whereMaterialCondition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartsBackup whereMaterialName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartsBackup whereMaterialThickness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartsBackup whereMaterialThicknessUnitCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartsBackup whereMethodCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartsBackup whereMinimumLineCharge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartsBackup whereMinimumLotCharge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartsBackup whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartsBackup whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartsBackup whereOperatorNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartsBackup wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartsBackup wherePriceBreak($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartsBackup wherePriceCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartsBackup whereProcedureCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartsBackup whereProcessCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartsBackup whereQualityCheck1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartsBackup whereQualityCheck2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartsBackup whereQualityCheck3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartsBackup whereQualityCheck4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartsBackup whereQualityCheck5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartsBackup whereQualityCheck6($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartsBackup whereQuantityPriceBreak($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartsBackup whereQuoteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartsBackup whereRevision($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartsBackup whereRevisionCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartsBackup whereSessionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartsBackup whereSpecialRequirement($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartsBackup whereSpecification($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartsBackup whereSurfaceArea($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartsBackup whereSurfaceAreaUnitCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartsBackup whereThicknessMaximum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartsBackup whereThicknessMinimum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartsBackup whereThicknessUnitCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartsBackup whereUnitCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartsBackup whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartsBackup whereWeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartsBackup whereWeightUnitCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartsBackup whereWidth($value)
 * @mixin \Eloquent
 */
	class PartsBackup extends \Eloquent {}
}

namespace App\Models\Wipsys{
/**
 * App\Models\Wipsys\Partshistory
 *
 * @property string|null $number
 * @property string|null $revision_code
 * @property int $work_order_number
 * @property string|null $description
 * @property string|null $customer_code
 * @property string|null $customer_name
 * @property string|null $process_code
 * @property string|null $method_code
 * @property string|null $price
 * @property string|null $price_code
 * @property string|null $price_break
 * @property string|null $quantity_price_break
 * @property string|null $unit_code
 * @property string|null $minimum_lot_charge
 * @property string|null $minimum_line_charge
 * @property int|null $quote_id
 * @property int $certify
 * @property string|null $specification
 * @property int $bake
 * @property string|null $baking_time_pre
 * @property string|null $baking_temp_pre
 * @property string|null $baking_time_post
 * @property string|null $baking_temp_post
 * @property string|null $procedure_code
 * @property string|null $material
 * @property string|null $material_name
 * @property string|null $material_condition
 * @property string|null $thickness_minimum
 * @property string|null $thickness_maximum
 * @property string|null $thickness_unit_code
 * @property string|null $surface_area
 * @property string|null $surface_area_unit_code
 * @property string|null $weight
 * @property string|null $weight_unit_code
 * @property string|null $length
 * @property string|null $width
 * @property string|null $height
 * @property string|null $dimension_unit_code
 * @property float|null $material_thickness
 * @property string|null $material_thickness_unit_code
 * @property string|null $note
 * @property string|null $special_requirement
 * @property string|null $operator_note
 * @property int|null $quality_check_1
 * @property int|null $quality_check_2
 * @property int|null $quality_check_3
 * @property int|null $quality_check_4
 * @property int|null $quality_check_5
 * @property int|null $quality_check_6
 * @property int $id
 * @property int|null $image_count
 * @property int $original_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $archive
 * @property int|null $revision
 * @method static \Illuminate\Database\Eloquent\Builder|Partshistory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Partshistory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Partshistory query()
 * @method static \Illuminate\Database\Eloquent\Builder|Partshistory whereArchive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partshistory whereBake($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partshistory whereBakingTempPost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partshistory whereBakingTempPre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partshistory whereBakingTimePost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partshistory whereBakingTimePre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partshistory whereCertify($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partshistory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partshistory whereCustomerCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partshistory whereCustomerName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partshistory whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partshistory whereDimensionUnitCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partshistory whereHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partshistory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partshistory whereImageCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partshistory whereLength($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partshistory whereMaterial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partshistory whereMaterialCondition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partshistory whereMaterialName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partshistory whereMaterialThickness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partshistory whereMaterialThicknessUnitCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partshistory whereMethodCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partshistory whereMinimumLineCharge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partshistory whereMinimumLotCharge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partshistory whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partshistory whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partshistory whereOperatorNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partshistory whereOriginalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partshistory wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partshistory wherePriceBreak($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partshistory wherePriceCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partshistory whereProcedureCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partshistory whereProcessCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partshistory whereQualityCheck1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partshistory whereQualityCheck2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partshistory whereQualityCheck3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partshistory whereQualityCheck4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partshistory whereQualityCheck5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partshistory whereQualityCheck6($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partshistory whereQuantityPriceBreak($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partshistory whereQuoteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partshistory whereRevision($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partshistory whereRevisionCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partshistory whereSpecialRequirement($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partshistory whereSpecification($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partshistory whereSurfaceArea($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partshistory whereSurfaceAreaUnitCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partshistory whereThicknessMaximum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partshistory whereThicknessMinimum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partshistory whereThicknessUnitCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partshistory whereUnitCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partshistory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partshistory whereWeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partshistory whereWeightUnitCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partshistory whereWidth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partshistory whereWorkOrderNumber($value)
 * @mixin \Eloquent
 */
	class Partshistory extends \Eloquent {}
}

namespace App\Models\Wipsys{
/**
 * App\Models\Wipsys\PriceCode
 *
 * @property string $code
 * @property string|null $description
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $archive
 * @property int|null $revision
 * @method static \Illuminate\Database\Eloquent\Builder|PriceCode newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PriceCode newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PriceCode query()
 * @method static \Illuminate\Database\Eloquent\Builder|PriceCode whereArchive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PriceCode whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PriceCode whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PriceCode whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PriceCode whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PriceCode whereRevision($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PriceCode whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class PriceCode extends \Eloquent {}
}

namespace App\Models\Wipsys{
/**
 * App\Models\Wipsys\Printer
 *
 * @property string|null $printer
 * @property string|null $description
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $archive
 * @property int|null $revision
 * @method static \Illuminate\Database\Eloquent\Builder|Printer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Printer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Printer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Printer whereArchive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Printer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Printer whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Printer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Printer wherePrinter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Printer whereRevision($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Printer whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Printer extends \Eloquent {}
}

namespace App\Models\Wipsys{
/**
 * App\Models\Wipsys\Priority
 *
 * @property int $id
 * @property string|null $code
 * @property string|null $description
 * @property int|null $turn_around_days
 * @property string|null $image_key
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $archive
 * @property int|null $revision
 * @method static \Illuminate\Database\Eloquent\Builder|Priority newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Priority newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Priority query()
 * @method static \Illuminate\Database\Eloquent\Builder|Priority whereArchive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Priority whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Priority whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Priority whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Priority whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Priority whereImageKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Priority whereRevision($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Priority whereTurnAroundDays($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Priority whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Priority extends \Eloquent {}
}

namespace App\Models\Wipsys{
/**
 * App\Models\Wipsys\Procedure
 *
 * @property string|null $code
 * @property string|null $description
 * @property string|null $document
 * @property string|null $minimum_price
 * @property string|null $each_price
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $archive
 * @property int $revision
 * @method static \Illuminate\Database\Eloquent\Builder|Procedure newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Procedure newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Procedure query()
 * @method static \Illuminate\Database\Eloquent\Builder|Procedure whereArchive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Procedure whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Procedure whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Procedure whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Procedure whereDocument($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Procedure whereEachPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Procedure whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Procedure whereMinimumPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Procedure whereRevision($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Procedure whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Procedure extends \Eloquent {}
}

namespace App\Models\Wipsys{
/**
 * App\Models\Wipsys\Process
 *
 * @property string|null $code
 * @property string|null $name
 * @property string|null $minimum_lot_charge
 * @property int $id
 * @property int|null $compliant_rohs
 * @property int|null $compliant_reach
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property int $archive
 * @property int $revision
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Wipsys\Quote[] $processQuotes
 * @property-read int|null $process_quotes_count
 * @method static \Illuminate\Database\Eloquent\Builder|Process newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Process newQuery()
 * @method static \Illuminate\Database\Query\Builder|Process onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Process query()
 * @method static \Illuminate\Database\Eloquent\Builder|Process whereArchive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Process whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Process whereCompliantReach($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Process whereCompliantRohs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Process whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Process whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Process whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Process whereMinimumLotCharge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Process whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Process whereRevision($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Process whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Process withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Process withoutTrashed()
 * @mixin \Eloquent
 */
	class Process extends \Eloquent {}
}

namespace App\Models\Wipsys{
/**
 * App\Models\Wipsys\Qualitycheck
 *
 * @property int $id
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $archive
 * @property int|null $revision
 * @method static \Illuminate\Database\Eloquent\Builder|Qualitycheck newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Qualitycheck newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Qualitycheck query()
 * @method static \Illuminate\Database\Eloquent\Builder|Qualitycheck whereArchive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Qualitycheck whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Qualitycheck whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Qualitycheck whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Qualitycheck whereRevision($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Qualitycheck whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Qualitycheck extends \Eloquent {}
}

namespace App\Models\Wipsys{
/**
 * App\Models\Wipsys\Quote
 *
 * @property int $id
 * @property int|null $customer_id
 * @property string|null $customer_code
 * @property string|null $customer_name
 * @property int|null $contact_id
 * @property string|null $customer_rfq
 * @property int|null $part_id
 * @property string|null $part_number Part Number
 * @property string|null $revision_code
 * @property string|null $part_description Part Name
 * @property string|null $specification spec, Mil-C-5411 Type II, Class 1a
 * @property string|null $material Part's material
 * @property int|null $process_id
 * @property string|null $process_code
 * @property string|null $process_old Process the part is going to undergo
 * @property string|null $method_code
 * @property string|null $method Method for the process. barrel, rack, etc.
 * @property string|null $quantity_minimum
 * @property string|null $quantity_maximum
 * @property string|null $unit_code
 * @property string|null $units
 * @property string|null $quantity1 How many pieces
 * @property string|null $price
 * @property string|null $price_code
 * @property string|null $minimum_lot_charge
 * @property int|null $quantity_price_break
 * @property string|null $price_break
 * @property float|null $weight piece weight
 * @property string|null $weight_unit_code
 * @property string|null $surface_area
 * @property string|null $surface_area_unit_code
 * @property string|null $thickness_minimum
 * @property string|null $thickness_maximum
 * @property string|null $thickness_unit_code
 * @property string|null $notes notes and comments about the quote
 * @property string|null $comments Internal Use Comments
 * @property string|null $quotedBy
 * @property int|null $baking
 * @property string|null $baking_time_pre
 * @property string|null $baking_temp_pre
 * @property string|null $baking_time_post
 * @property string|null $baking_temp_post
 * @property string|null $bake_notes
 * @property int|null $blasting
 * @property string|null $blast_notes
 * @property int|null $masking
 * @property string|null $mask_notes
 * @property int|null $testing
 * @property string|null $test_notes
 * @property int|null $user_id
 * @property string|null $user_code
 * @property string|null $emails
 * @property int|null $email_print
 * @property string|null $print
 * @property string|null $value_min
 * @property string|null $value_max
 * @property int|null $image_count
 * @property int $archive
 * @property int|null $revision
 * @property string|null $session_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Wipsys\Contact|null $contact
 * @property-read \App\Models\Wipsys\Customer|null $customer
 * @property-read \App\Models\Wipsys\Process|null $process
 * @property-read User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Quote newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Quote newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Quote query()
 * @method static \Illuminate\Database\Eloquent\Builder|Quote whereArchive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quote whereBakeNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quote whereBaking($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quote whereBakingTempPost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quote whereBakingTempPre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quote whereBakingTimePost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quote whereBakingTimePre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quote whereBlastNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quote whereBlasting($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quote whereComments($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quote whereContactId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quote whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quote whereCustomerCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quote whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quote whereCustomerName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quote whereCustomerRfq($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quote whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quote whereEmailPrint($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quote whereEmails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quote whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quote whereImageCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quote whereMaskNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quote whereMasking($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quote whereMaterial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quote whereMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quote whereMethodCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quote whereMinimumLotCharge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quote whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quote wherePartDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quote wherePartId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quote wherePartNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quote wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quote wherePriceBreak($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quote wherePriceCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quote wherePrint($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quote whereProcessCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quote whereProcessId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quote whereProcessOld($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quote whereQuantity1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quote whereQuantityMaximum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quote whereQuantityMinimum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quote whereQuantityPriceBreak($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quote whereQuotedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quote whereRevision($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quote whereRevisionCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quote whereSessionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quote whereSpecification($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quote whereSurfaceArea($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quote whereSurfaceAreaUnitCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quote whereTestNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quote whereTesting($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quote whereThicknessMaximum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quote whereThicknessMinimum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quote whereThicknessUnitCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quote whereUnitCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quote whereUnits($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quote whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quote whereUserCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quote whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quote whereValueMax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quote whereValueMin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quote whereWeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quote whereWeightUnitCode($value)
 * @mixin \Eloquent
 */
	class Quote extends \Eloquent {}
}

namespace App\Models\Wipsys{
/**
 * App\Models\Wipsys\Session
 *
 * @property int $id
 * @property string|null $session_id
 * @property string|null $jwt
 * @property int $active
 * @property string|null $key_strokes
 * @property string|null $user_id
 * @property string|null $user_code
 * @property string|null $user
 * @property string|null $email
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $revision
 * @method static \Illuminate\Database\Eloquent\Builder|Session newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Session newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Session query()
 * @method static \Illuminate\Database\Eloquent\Builder|Session whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session whereJwt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session whereKeyStrokes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session whereRevision($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session whereSessionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session whereUser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session whereUserCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session whereUserId($value)
 * @mixin \Eloquent
 */
	class Session extends \Eloquent {}
}

namespace App\Models\Wipsys{
/**
 * App\Models\Wipsys\Sftuser
 *
 * @property string $code
 * @property string|null $user
 * @property string|null $email
 * @property string|null $password
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $archive
 * @property int|null $revision
 * @method static \Illuminate\Database\Eloquent\Builder|Sftuser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sftuser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sftuser query()
 * @method static \Illuminate\Database\Eloquent\Builder|Sftuser whereArchive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sftuser whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sftuser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sftuser whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sftuser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sftuser wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sftuser whereRevision($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sftuser whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sftuser whereUser($value)
 * @mixin \Eloquent
 */
	class Sftuser extends \Eloquent {}
}

namespace App\Models\Wipsys{
/**
 * App\Models\Wipsys\State
 *
 * @property string $code
 * @property string|null $name
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $archive
 * @property int $revision
 * @method static \Illuminate\Database\Eloquent\Builder|State newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|State newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|State query()
 * @method static \Illuminate\Database\Eloquent\Builder|State whereArchive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereRevision($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class State extends \Eloquent {}
}

namespace App\Models\Wipsys{
/**
 * App\Models\Wipsys\Step
 *
 * @property string $code
 * @property string|null $description
 * @property int $equipment_hours
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $archive
 * @property int $revision
 * @method static \Illuminate\Database\Eloquent\Builder|Step newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Step newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Step query()
 * @method static \Illuminate\Database\Eloquent\Builder|Step whereArchive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Step whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Step whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Step whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Step whereEquipmentHours($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Step whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Step whereRevision($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Step whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Step extends \Eloquent {}
}

namespace App\Models\Wipsys{
/**
 * App\Models\Wipsys\Tag
 *
 * @property int|null $number
 * @property int|null $work_order_number
 * @property string|null $quantity
 * @property string|null $quantity_shipped
 * @property int|null $shipped
 * @property \Illuminate\Support\Carbon|null $date_received
 * @property string|null $note
 * @property int|null $ordinal
 * @property string|null $container
 * @property int $id
 * @property int|null $printed
 * @property string|null $session_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $archive
 * @property int $revision
 * @method static \Illuminate\Database\Eloquent\Builder|Tag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag query()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereArchive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereContainer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereDateReceived($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereOrdinal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag wherePrinted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereQuantityShipped($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereRevision($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereSessionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereShipped($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereWorkOrderNumber($value)
 * @mixin \Eloquent
 */
	class Tag extends \Eloquent {}
}

namespace App\Models\Wipsys{
/**
 * App\Models\Wipsys\Unit
 *
 * @property string|null $code
 * @property string|null $description
 * @property string|null $name_singular
 * @property string|null $name_plural
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $archive
 * @property int|null $revision
 * @method static \Illuminate\Database\Eloquent\Builder|Unit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Unit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Unit query()
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereArchive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereNamePlural($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereNameSingular($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereRevision($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Unit extends \Eloquent {}
}

namespace App\Models\Wipsys{
/**
 * App\Models\Wipsys\Ups
 *
 * @property int $id
 * @property string|null $tracking_number
 * @property string|null $receiver_name
 * @property string|null $shipment_process_timestamp
 * @property string|null $service_type
 * @property string|null $weight
 * @property string|null $ref_1
 * @property string|null $ref_2
 * @property string|null $ref_3
 * @property string|null $ref_4
 * @property string|null $ref_5
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $revision
 * @property int $archive
 * @method static \Illuminate\Database\Eloquent\Builder|Ups newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Ups newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Ups query()
 * @method static \Illuminate\Database\Eloquent\Builder|Ups whereArchive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ups whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ups whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ups whereReceiverName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ups whereRef1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ups whereRef2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ups whereRef3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ups whereRef4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ups whereRef5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ups whereRevision($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ups whereServiceType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ups whereShipmentProcessTimestamp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ups whereTrackingNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ups whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ups whereWeight($value)
 * @mixin \Eloquent
 */
	class Ups extends \Eloquent {}
}

namespace App\Models\Wipsys{
/**
 * App\Models\Wipsys\Workgroup
 *
 * @property string|null $name
 * @property string|null $process_code
 * @property string|null $method_code
 * @property int $method_default
 * @property string|null $step_code
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $archive
 * @property int $revision
 * @method static \Illuminate\Database\Eloquent\Builder|Workgroup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Workgroup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Workgroup query()
 * @method static \Illuminate\Database\Eloquent\Builder|Workgroup whereArchive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workgroup whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workgroup whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workgroup whereMethodCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workgroup whereMethodDefault($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workgroup whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workgroup whereProcessCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workgroup whereRevision($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workgroup whereStepCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workgroup whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Workgroup extends \Eloquent {}
}

namespace App\Models\Wipsys{
/**
 * App\Models\Wipsys\Workorder
 *
 * @property int|null $number
 * @property string|null $customer_code
 * @property int|null $part_id
 * @property string|null $part_number
 * @property string|null $process_code
 * @property string|null $price
 * @property string|null $price_code
 * @property \Illuminate\Support\Carbon|null $date_received
 * @property \Illuminate\Support\Carbon|null $date_required
 * @property string|null $customer_purchase_order
 * @property string|null $customer_packing_list
 * @property string|null $quantity
 * @property string|null $unit_code
 * @property string|null $quantity_shipped
 * @property int|null $our_last_packing_list
 * @property string|null $destination_code
 * @property string|null $carrier_code
 * @property string|null $freight_code
 * @property \Illuminate\Support\Carbon|null $date_shipped
 * @property string|null $shipped_amount
 * @property string|null $inventory_amount
 * @property int|null $invoice_number
 * @property \Illuminate\Support\Carbon|null $invoice_date
 * @property string|null $invoice_amount
 * @property int $priority
 * @property int $rework
 * @property int $hot
 * @property int $started
 * @property int $completed
 * @property int $shipped
 * @property int $cod
 * @property int $invoiced
 * @property string|null $note
 * @property int $id
 * @property int|null $printed
 * @property int|null $image_count
 * @property string|null $session_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $archive
 * @property int $revision
 * @property-read \App\Models\Wipsys\Customer|null $customer
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Wipsys\LaborCard[] $laborcards
 * @property-read int|null $laborcards_count
 * @property-read \App\Models\Wipsys\Part|null $part
 * @method static \Illuminate\Database\Eloquent\Builder|Workorder newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Workorder newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Workorder query()
 * @method static \Illuminate\Database\Eloquent\Builder|Workorder whereArchive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorder whereCarrierCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorder whereCod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorder whereCompleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorder whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorder whereCustomerCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorder whereCustomerPackingList($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorder whereCustomerPurchaseOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorder whereDateReceived($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorder whereDateRequired($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorder whereDateShipped($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorder whereDestinationCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorder whereFreightCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorder whereHot($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorder whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorder whereImageCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorder whereInventoryAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorder whereInvoiceAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorder whereInvoiceDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorder whereInvoiceNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorder whereInvoiced($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorder whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorder whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorder whereOurLastPackingList($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorder wherePartId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorder wherePartNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorder wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorder wherePriceCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorder wherePrinted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorder wherePriority($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorder whereProcessCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorder whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorder whereQuantityShipped($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorder whereRevision($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorder whereRework($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorder whereSessionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorder whereShipped($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorder whereShippedAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorder whereStarted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorder whereUnitCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorder whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Workorder extends \Eloquent {}
}

namespace App\Models\Wipsys{
/**
 * App\Models\Wipsys\Workorderhistory
 *
 * @property int|null $number
 * @property string|null $customer_code
 * @property string|null $customer_name
 * @property int|null $part_id
 * @property string|null $part_number
 * @property string|null $process_code
 * @property string|null $price
 * @property string|null $price_code
 * @property \Illuminate\Support\Carbon|null $date_received
 * @property \Illuminate\Support\Carbon|null $date_required
 * @property string|null $customer_purchase_order
 * @property string|null $customer_packing_list
 * @property string|null $quantity
 * @property string|null $unit_code
 * @property string|null $quantity_shipped
 * @property int|null $our_last_packing_list
 * @property string|null $destination_code
 * @property string|null $carrier_code
 * @property string|null $freight_code
 * @property \Illuminate\Support\Carbon|null $date_shipped
 * @property string|null $shipped_amount
 * @property string|null $inventory_amount
 * @property int|null $invoice_number
 * @property \Illuminate\Support\Carbon|null $invoice_date
 * @property string|null $invoice_amount
 * @property int|null $priority
 * @property int|null $rework
 * @property int|null $hot
 * @property int|null $started
 * @property int $completed
 * @property int|null $shipped
 * @property int|null $cod
 * @property int|null $invoiced
 * @property string|null $note
 * @property string|null $STEPNAME1
 * @property string|null $TMANHRS1
 * @property string|null $TOTHOURS1
 * @property string|null $STEPNAME2
 * @property string|null $TMANHRS2
 * @property string|null $TOTHOURS2
 * @property string|null $STEPNAME3
 * @property string|null $TMANHRS3
 * @property string|null $TOTHOURS3
 * @property int $id
 * @property int|null $image_count
 * @property string|null $session_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $archive
 * @property int|null $revision
 * @property-read \App\Models\Wipsys\Part|null $part
 * @method static \Illuminate\Database\Eloquent\Builder|Workorderhistory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Workorderhistory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Workorderhistory query()
 * @method static \Illuminate\Database\Eloquent\Builder|Workorderhistory whereArchive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorderhistory whereCarrierCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorderhistory whereCod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorderhistory whereCompleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorderhistory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorderhistory whereCustomerCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorderhistory whereCustomerName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorderhistory whereCustomerPackingList($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorderhistory whereCustomerPurchaseOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorderhistory whereDateReceived($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorderhistory whereDateRequired($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorderhistory whereDateShipped($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorderhistory whereDestinationCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorderhistory whereFreightCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorderhistory whereHot($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorderhistory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorderhistory whereImageCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorderhistory whereInventoryAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorderhistory whereInvoiceAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorderhistory whereInvoiceDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorderhistory whereInvoiceNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorderhistory whereInvoiced($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorderhistory whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorderhistory whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorderhistory whereOurLastPackingList($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorderhistory wherePartId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorderhistory wherePartNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorderhistory wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorderhistory wherePriceCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorderhistory wherePriority($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorderhistory whereProcessCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorderhistory whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorderhistory whereQuantityShipped($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorderhistory whereRevision($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorderhistory whereRework($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorderhistory whereSTEPNAME1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorderhistory whereSTEPNAME2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorderhistory whereSTEPNAME3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorderhistory whereSessionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorderhistory whereShipped($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorderhistory whereShippedAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorderhistory whereStarted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorderhistory whereTMANHRS1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorderhistory whereTMANHRS2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorderhistory whereTMANHRS3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorderhistory whereTOTHOURS1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorderhistory whereTOTHOURS2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorderhistory whereTOTHOURS3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorderhistory whereUnitCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workorderhistory whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Workorderhistory extends \Eloquent {}
}

