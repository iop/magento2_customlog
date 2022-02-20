<?php declare(strict_types=1);

namespace Iop\CustomLog\Plugin;

use Psr\Log\LoggerInterface;

class Registry
{
    /**
     * @var LoggerInterface
     */
    private LoggerInterface $logger;

    /**
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * @param \Magento\Framework\Registry $subject
     * @param string $key
     * @return string[]
     */
    public function beforeRegistry(\Magento\Framework\Registry $subject, string $key): array
    {
        $this->logger->info(__METHOD__);
        return [$key];
    }
}
