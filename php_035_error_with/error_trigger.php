<?php

/**
 * E_USER_ERROR - 致命的用户生成的 run-time 错误。错误无法恢复。脚本执行被中断。
 * E_USER_WARNING - 非致命的用户生成的 run-time 警告。脚本执行不被中断。
 * E_USER_NOTICE - 默认。用户生成的 run-time 通知。在脚本发现可能有错误时发生，但也可能在脚本正常运行时发生。
 */

$test=2;
if ($test>1)
{
	trigger_error("变量值必须小于等于 1");//主动触发错误，会报错
}

?>