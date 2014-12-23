<?php

$texts = [
    'project.link'                                          => 'Проект на GitHub',
    'project.log_in'                                        => 'Вход',

    'error.not.installed.title'                             => 'Не установлено',
    'error.not.installed.description'                       => 'Похоже, что OpCache не установлен.',
    'error.not.enabled.title'                               => 'Не включено',
    'error.not.enabled.description'                         => 'Похоже, что OpCache не включен.',

    'menu.status'                                           => 'Статус',
    'menu.config'                                           => 'Конфигурация',
    'menu.scripts'                                          => 'Закэшированные скрипты',
    'menu.graphs'                                           => 'Графики',

    'reset.submit'                                          => 'Сбросить',
    'confirmation.reset'                                    => 'Вы уверены, что хотите сбросить кэш?',
    'confirmation.yes'                                      => 'Да',
    'confirmation.no'                                       => 'Нет',

    'status.title'                                          => 'Статус',
    'status.opcache_enabled'                                => 'Включен',
    'status.cache_full'                                     => 'Кэш полон',
    'status.restart_pending'                                => 'В ожидании перезапуска',
    'status.restart_in_progress'                            => 'Перезапускается',

    'memory.title'                                          => 'Использование памяти',
    'memory.used_memory'                                    => 'Использовано памяти',
    'memory.free_memory'                                    => 'Свободно памяти',
    'memory.wasted_memory'                                  => 'Потраченная память',
    'memory.current_wasted_percentage'                      => 'Потрачено памяти сейчас',

    'stats.title'                                           => 'Статистика',
    'stats.num_cached_scripts'                              => 'Закэшированные скрипты',
    'stats.num_cached_keys'                                 => 'Закэшированные ключи',
    'stats.max_cached_keys'                                 => 'Максимум закэшированных ключей',
    'stats.hits'                                            => 'Хиты',
    'stats.start_time'                                      => 'Время запуска',
    'stats.last_restart_time'                               => 'Последний перезапуск',
    'stats.oom_restarts'                                    => 'Перезапуск нехватки памяти',
    'stats.hash_restarts'                                   => 'Перезапуск хэша',
    'stats.manual_restarts'                                 => 'Ручные перезапуски',
    'stats.misses'                                          => 'Промахи',
    'stats.blacklist_misses'                                => 'Промахи по черному списку',
    'stats.blacklist_miss_ratio'                            => 'Коэффициент промахов',
    'stats.opcache_hit_rate'                                => 'Коэффициент попаданий Opcache',

    'config.title'                                          => 'Конфигурация',
    'config.opcache.enable'                                 => 'Включен',
    'config.opcache.enable.description'                     => 'Определяет включен ли Zend OPCache.',
    'config.opcache.enable_cli'                             => 'Включено для CLI',
    'config.opcache.enable_cli.description'                 => 'Определяет включен ли Zend OPCache для CLI версии PHP.',
    'config.opcache.use_cwd'                                => 'Базировать ключи на рабочей директории',
    'config.opcache.use_cwd.description'                    => 'Когда включено, OPcache добавляет рабочую директорию к ключу скрипта тем самым устраняя возможность коллизии между файлами с одинаковым названием. Отключение повышает производительность, но может сломать рабочие приложения.',
    'config.opcache.validate_timestamps'                    => 'Валидировать timestamps',
    'config.opcache.validate_timestamps.description'        => 'Когда выключено, нужно перезапустить OPcache вручную или перезапустить веб сервер чтобы применить изменения в файловой системе.',
    'config.opcache.inherited_hack'                         => '"Inherited hack"',
    'config.opcache.inherited_hack.description'             => '',
    'config.opcache.dups_fix'                               => '"Dups fix"',
    'config.opcache.dups_fix.description'                   => '',
    'config.opcache.revalidate_path'                        => 'Валидация пути',
    'config.opcache.revalidate_path.description'            => 'Включает или отключает поиск в include_path.',
    'config.opcache.log_verbosity_level'                    => 'Уровень подробности логирования',
    'config.opcache.log_verbosity_level.description'        => 'Все ошибки OPcache попадают в лог веб сервера. По умолчанию в лог файл попадают только фатальные ошибки (уровень 0) или ошибки (уровень 1). Так же можно включить предупреждения (уровень 2), информационные сообщения (уровень 3) или сообщения отладки (уровень 4).',
    'config.opcache.memory_consumption'                     => 'Количество памяти Opcache',
    'config.opcache.memory_consumption.description'         => 'Количество разделяемой памяти OPcache.',
    'config.opcache.interned_strings_buffer'                => 'Буфер пула строк',
    'config.opcache.interned_strings_buffer.description'    => 'Количество памяти для пула строк в мегабайтах.',
    'config.opcache.max_accelerated_files'                  => 'Максимум закэшированных скриптов',
    'config.opcache.max_accelerated_files.description'      => 'Максимальное количество ключей (скриптов) в OPcache хэш-таблице. Допустимы значения между 200 и 100000.',
    'config.opcache.max_wasted_percentage'                  => 'Максимум потраченной памяти до перезапуска',
    'config.opcache.max_wasted_percentage.description'      => 'Максимально допустимый процент потраченной памяти пока не будет назначен перезапуск.',
    'config.opcache.consistency_checks'                     => 'Частота проверок на совместимость.',
    'config.opcache.consistency_checks.description'         => 'Проверять кэш по котнрольной сумме каждые N запросов. Значение по умолчанию "0" означает выключить проверки.',
    'config.opcache.force_restart_timeout'                  => 'Частота принужденного перезапуска',
    'config.opcache.force_restart_timeout.description'      => 'Как долго ждать (в секундах) начала запланированного перезапуска если кэш не используется.',
    'config.opcache.revalidate_freq'                        => 'Частота проверки изменений',
    'config.opcache.revalidate_freq.description'            => 'Как часто (в секундах) проверять timestamps файла на изменения по сравнению с разделяемой памятью. "1" значит один раз в секунду, но только единажды за запрос. "0" значит проверять всегда.',
    'config.opcache.preferred_memory_model'                 => '',
    'config.opcache.preferred_memory_model.description'     => 'Предпочтительная модель разделяемой памяти. Оставив пустым система выберет сама.',
    'config.opcache.blacklist_filename'                     => 'Черный список',
    'config.opcache.blacklist_filename.description'         => 'Местонахождение файла черного списка OPcache. Каждый файл черного списка OPcache это текстовый файл содержащий названия файлов исключенных из ускорения. Каждый исключенный файл находится на новой строке. Название файла может быть как полным путем к файлу, так и префиксом. К примеру "/var/www/x" добавит все файлы и директории в /var/www которые начинаются на "x" в черный список. Строки начинающиеся с символа ";" игнорируются и используются для комментариев.',
    'config.opcache.max_file_size'                          => 'Исключить кэширование файлов больших чем',
    'config.opcache.max_file_size.description'              => 'Позволяет исключать большие файлы из кэширования. По умолчанию все файлы кэшируютсяBy default all files are cached.',
    'config.opcache.error_log'                              => 'Лог ошибок',
    'config.opcache.error_log.description'                  => 'Файл лога ошибок OPcache. Пустая строка подразумевает "stderr".',
    'config.opcache.protect_memory'                         => 'Защищать память',
    'config.opcache.protect_memory.description'             => 'Защищать разделяемую память от неожиданной записи во время исполнения. Полезно только для отладки.',
    'config.opcache.save_comments'                          => 'Сохранять комментарии',
    'config.opcache.save_comments.description'              => 'Если выключено, все PHPDoc комментарии будут исключены из кода для снижения размера оптимизированного кода.',
    'config.opcache.load_comments'                          => 'Загружать комментарии',
    'config.opcache.load_comments.description'              => 'Если выключено, то PHPDoc комментарии не будут загружены из разделяемой памяти, в следствии "Doc" могут быть сохранены (save_comments=1), но не загружены приложениями которым не требуются.',
    'config.opcache.fast_shutdown'                          => 'Быстрая остановка',
    'config.opcache.fast_shutdown.description'              => 'Если включено, используется быстрая остановка ускоренных скриптов.',
    'config.opcache.enable_file_override'                   => 'Переопределение файлов',
    'config.opcache.enable_file_override.description'       => 'Разрешить переопределение проверки файлов (file_exists, etc.). Может повысить производительность.',
    'config.opcache.optimization_level'                     => 'Уровень оптимизации',
    'config.opcache.optimization_level.description'         => 'Битовая маска, в которой каждый бит включает или выключает соответствующую оптимизацию OPcache.',

    'blacklist.title'                                       => 'Черный список',
    'blacklist.empty'                                       => 'Черный список пуст',

    'scripts.title'                                         => 'Закэшированные скрипты',
    'scripts.overview.title'                                => 'Обзор',
    'scripts.empty'                                         => 'Нет закэшированных скриптов',
    'scripts.directory.script_count'                        => ' (<i class="count">%s</i> файлов)',
    'scripts.full_path'                                     => 'Имя файла',
    'scripts.hits'                                          => 'Хиты',
    'scripts.memory_consumption'                            => 'Память',
    'scripts.last_used_timestamp'                           => 'Последнее использование',
    'scripts.timestamp'                                     => 'Создано',
    'scripts.actions'                                       => 'Действия',
    'script.invalidate'                                     => 'Аннулировать',
    'scripts.filter.placeholder'                            => 'Фильтрация закэшированных скриптов',

    'graph.title'                                           => 'Графики',
    'graph.memory.title'                                    => 'Память',
    'graph.memory.free'                                     => 'свободно',
    'graph.memory.used'                                     => 'занято',
    'graph.memory.wasted'                                   => 'потрачено',
    'graph.keys.title'                                      => 'Ключи',
    'graph.keys.free'                                       => 'свободно',
    'graph.keys.scripts'                                    => 'занято',
    'graph.keys.wasted'                                     => 'потрачено',
    'graph.hits.title'                                      => 'Хиты',
    'graph.hits.hits'                                       => 'хиты',
    'graph.hits.misses'                                     => 'промахи',
    'graph.hits.blacklist'                                  => 'черный список'
];
