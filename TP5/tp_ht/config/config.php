<?php
/**
 * App应用配置
 * Created by PhpStorm.
 * @author  cbwfree
 */

// 管理员登录Session变量
define('LOGIN_ADMIN', '_LOGIN_ADMIN_INFO_');


// 全局配置
return [
    // +----------------------------------------------------------------------
    // | 应用设置
    // +----------------------------------------------------------------------

    // 应用调试模式
    'app_debug'              => true,
    // 应用Trace
    'app_trace'              => false,
    // 是否支持多模块
    'app_multi_module'       => true,
    // 默认全局过滤方法, 多个以逗号分割
    'default_filter'         => 'urldecode',
    // 扩展配置文件
    'extra_config_list'      => [
        'database',
        'route',
    ],
    // 扩展函数文件
    'extra_file_list'        => [
        THINK_PATH . 'helper' . EXT,                // TP帮助函数
    ],

    // +----------------------------------------------------------------------
    // | URL设置
    // +----------------------------------------------------------------------

    // URL伪静态后缀
    'url_html_suffix'        => 'html',
    // URL普通方式参数 用于自动生成
    'url_common_param'       => true,
    // 是否开启路由
    'url_route_on'           => true,
    // 是否强制使用路由
    'url_route_must'         => false,
    // 域名部署
    'url_domain_deploy'      => false,
    // 域名根，如.thinkphp.cn
    'url_domain_root'        => '',

    // +----------------------------------------------------------------------
    // | 模板设置
    // +----------------------------------------------------------------------

    // 视图输出字符串内容替换
    'view_replace_str'       => [
        '__assets__'        => '/assets',
        '__uploads__'       => '/uploads',
        '__image__'         => '/assets/images',
        '__style__'         => '/assets/css',
        '__script__'        => '/assets/js',
        '__libs__'          => '/assets/libs'
    ],
    // 默认跳转页面对应的模板文件
    'dispatch_success_tmpl'  => THINK_PATH . 'tpl' . DS . 'dispatch_jump.tpl',
    'dispatch_error_tmpl'    => THINK_PATH . 'tpl' . DS . 'dispatch_jump.tpl',

    // +----------------------------------------------------------------------
    // | 异常及错误设置
    // +----------------------------------------------------------------------

    // 异常页面的模板文件
    'exception_tmpl'         => THINK_PATH . 'tpl' . DS . 'think_exception.tpl',

    // 错误显示信息,非调试模式有效
    'error_message'          => '页面错误！请稍后再试～',
    // 显示错误信息
    'show_error_msg'         => false,
    // 异常处理handle类 留空使用 \think\exception\Handle
    'exception_handle'       => '',

    // +----------------------------------------------------------------------
    // | 日志设置
    // +----------------------------------------------------------------------

    'log'                    => [
        // 日志记录方式，支持 file sae socket
        'type' => 'File',
        // 日志保存目录
        'path' => LOG_PATH,
    ],

    // +----------------------------------------------------------------------
    // | Trace设置
    // +----------------------------------------------------------------------

    'trace'                  => [
        //支持Html Console
        'type' => 'Html',
    ],

    // +----------------------------------------------------------------------
    // | 缓存设置
    // +----------------------------------------------------------------------

    'cache'                  => [
        // 驱动方式
        'type'   => 'File',
        // 缓存保存目录
        'path'   => CACHE_PATH,
        // 缓存前缀
        'prefix' => '',
        // 缓存有效期 0表示永久缓存
        'expire' => 0,
    ],

    // +----------------------------------------------------------------------
    // | 会话设置
    // +----------------------------------------------------------------------

    'session'                => [
        'id'             => '',
        // SESSION_ID的提交变量,解决flash上传跨域
        'var_session_id' => '',
        // SESSION 前缀
        'prefix'         => 'think',
        // 驱动方式 支持redis memcache memcached
        'type'           => '',
        // 是否自动开启 SESSION
        'auto_start'     => true,
    ],

    // +----------------------------------------------------------------------
    // | Cookie设置
    // +----------------------------------------------------------------------
    'cookie'                 => [
        // cookie 名称前缀
        'prefix'    => '',
        // cookie 保存时间
        'expire'    => 0,
        // cookie 保存路径
        'path'      => '/',
        // cookie 有效域名
        'domain'    => '',
        //  cookie 启用安全传输
        'secure'    => false,
        // httponly设置
        'httponly'  => '',
        // 是否使用 setcookie
        'setcookie' => true,
    ],

    // +----------------------------------------------------------------------
    // | 验证码设置
    // +----------------------------------------------------------------------
    'captcha'               => [
        // 验证码加密密钥
        'seKey'    => 'AdminSystem',
        // 验证码字符集合
        'codeSet'  => '2345678abcdefhijkmnpqrstuvwxyzABCDEFGHJKLMNPQRTUVWXY',
        // 验证码过期时间（s）
        'expire'   => 1800,
        // 验证码字体大小(px)
        'fontSize' => 26,
        // 是否画混淆曲线
        'useCurve' => false,
        // 是否添加杂点
        'useNoise' => true,
        // 验证码图片高度
        'imageH'   => 0,
        // 验证码图片宽度
        'imageW'   => 0,
        // 验证码位数
        'length'   => 4,
        // 验证码字体，不设置随机获取
        'fontttf'  => '5.ttf',
        // 背景颜色
        'bg'       => [243, 251, 254],
    ],
];
